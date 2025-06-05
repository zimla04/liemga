<?php
/*
Plugin Name: Chào Mừng Sinh Viên
Description: Hiển thị lời chào ở cuối mỗi bài viết.
Version: 1.0
Author: Nguyễn Văn A
*/

function them_loi_chao_o_cuoi_bai($noi_dung) {
    if (is_single() && is_main_query()) {
        $loi_chao = '<p><strong>Chào mừng bạn đến với Blog của Nguyễn Châu Hoàng Hưng</strong></p>';
        $noi_dung .= $loi_chao;
    }
    return $noi_dung;
}

add_filter('the_content', 'them_loi_chao_o_cuoi_bai');
