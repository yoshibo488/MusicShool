<?php
$current_page = max(1, get_query_var('paged'));
$total_pages = $args->max_num_pages;

if ($total_pages > 1) { // ページ数が2以上のときだけ表示
    echo '<ul class="pagination01">';

    $pages = [1, $total_pages];

    if ($current_page == 1) {
        $pages[] = 2;
        $pages[] = 3;
    } elseif ($current_page == $total_pages) {
        $pages[] = $total_pages - 1;
        $pages[] = $total_pages - 2;
    } else {
        $pages[] = $current_page - 1;
        $pages[] = $current_page;
        $pages[] = $current_page + 1;
    }

    // 重複削除、並び替え
    $pages = array_unique($pages);
    sort($pages);

    // 範囲外のページを除外（1以上、最大ページ数以下のみ許可）
    $pages = array_filter($pages, function($page) use ($total_pages) {
        return $page >= 1 && $page <= $total_pages;
    });

    $last = 0;

    foreach ($pages as $page) {
        if ($last && $page - $last > 1) {
            echo '<li><span class="page-numbers dots">…</span></li>';
        }

        if ($page == $current_page) {
            echo '<li><span class="page-numbers current">' . $page . '</span></li>';
        } else {
            echo '<li><a class="page-numbers" href="' . get_pagenum_link($page) . '">' . $page . '</a></li>';
        }

        $last = $page;
    }

    echo '</ul>';
}
?>