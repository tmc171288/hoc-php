<!-- taoj mang luu tru so nguyen le tu 1 -> 150 -->
<?php
$list_odds = array();

for ($i = 3; $i <= 15; $i += 2) {
    $list_odds[] = $i;
}

function show_array($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

show_array($list_odds);


// show_array($list_odds);
// //  xoa mang 
// unset($list_odds[4]);

// show_array($list_odds);

// // them mang 

// $list_odds[4] = 11;
// show_array($list_odds);

$list_post = array(
    1 => array(
        'id' => 1,
        'post_title' => "Công an Hải Phòng tìm người liên quan vụ nghi lừa đảo chiếm đoạt tài sản
",
        'post_content' => "Để phục vụ công tác giải quyết nguồn tin về tội phạm, Phòng Cảnh sát hình sự đề nghị các cơ quan, tổ chức và cá nhân có thông tin liên quan đến người có nhân thân nêu trên chủ động cung cấp cho cơ quan Công an để phối hợp xác minh, xử lý theo quy định pháp luật.

",
        'post_desc' => "Phòng Cảnh sát hình sự Công an TP Hải Phòng đang xác minh đơn tố giác của công dân liên quan đến ông Nguyễn Văn Thắng (sinh ngày 29/6/1969, đăng ký hộ khẩu thường trú tại thôn An Biên, xã Hưng Nhân, huyện Vĩnh Bảo, TP Hải Phòng; nay là xã Vĩnh Hải, TP Hải Phòng) về hành vi nghi lừa đảo chiếm đoạt tài sản.

",
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'post_title' => " 2 Công an Hải Phòng tìm người liên quan vụ nghi lừa đảo chiếm đoạt tài sản
",
        'post_content' => "2 Để phục vụ công tác giải quyết nguồn tin về tội phạm, Phòng Cảnh sát hình sự đề nghị các cơ quan, tổ chức và cá nhân có thông tin liên quan đến người có nhân thân nêu trên chủ động cung cấp cho cơ quan Công an để phối hợp xác minh, xử lý theo quy định pháp luật.

",
        'post_desc' => "2 Phòng Cảnh sát hình sự Công an TP Hải Phòng đang xác minh đơn tố giác của công dân liên quan đến ông Nguyễn Văn Thắng (sinh ngày 29/6/1969, đăng ký hộ khẩu thường trú tại thôn An Biên, xã Hưng Nhân, huyện Vĩnh Bảo, TP Hải Phòng; nay là xã Vĩnh Hải, TP Hải Phòng) về hành vi nghi lừa đảo chiếm đoạt tài sản.

",
        'cat_id' => 2
    ),
    3 => array(
        'id' => 3,
        'post_title' => "3 Công an Hải Phòng tìm người liên quan vụ nghi lừa đảo chiếm đoạt tài sản
",
        'post_content' => "3 Để phục vụ công tác giải quyết nguồn tin về tội phạm, Phòng Cảnh sát hình sự đề nghị các cơ quan, tổ chức và cá nhân có thông tin liên quan đến người có nhân thân nêu trên chủ động cung cấp cho cơ quan Công an để phối hợp xác minh, xử lý theo quy định pháp luật.

",
        'post_desc' => "3 Phòng Cảnh sát hình sự Công an TP Hải Phòng đang xác minh đơn tố giác của công dân liên quan đến ông Nguyễn Văn Thắng (sinh ngày 29/6/1969, đăng ký hộ khẩu thường trú tại thôn An Biên, xã Hưng Nhân, huyện Vĩnh Bảo, TP Hải Phòng; nay là xã Vĩnh Hải, TP Hải Phòng) về hành vi nghi lừa đảo chiếm đoạt tài sản.

",
        'cat_id' => 3
    )
)

?>