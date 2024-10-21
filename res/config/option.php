<?php
/**
 * @package thanhdieuv5 (tester)
 * @author  Vương Thanh Diệu 
 */
interface ThanhDieuConfigInterface {
    public function CommonMethod();
}
class ThanhDieuHeader implements ThanhDieuConfigInterface {
    public $title = "Nguyễn văn Huy Hoàng | Resources V5";
    public $description = "Hi my name is Phoenix / botchat developer";
    public $keywords = "phoenix,web phoenix,hoang nguyen,hoangdev,phoenix home,profile phoenix";
    public $favicon = "./res/v5/img/logo.jpg";
    public $namesite = "PHOENIX | HOME";
    public $avatar = "./res/v5/img/IMG_1729269966555_1729271258874.jpg";
    public $userName = ["Hello Everybody", "My name is Phoenix.", "I really like botchat design 🌭"];
    public $trigger = "👉 Tìm hiểu tôi 😶&zwj;🌫️";
    public $bio1 = "🤖️ Người đam mê công nghệ số";
    public $bio2 = "🔍 Chia sẻ và giúp đỡ nhiệt tình";
    public $bio3 = "💻 Phát triển botchat Messenger";
    public $bio4 = "Cháu ngoan Bác Hồ";
    public $bio5 = "Ăn, ngủ, làm và học code 🎮";
    public $bio6 = "Kẻ khờ dại tin vào tình yêu ✨";
    public $SocialNetworks = [
        "facebook" => "https://www.facebook.com/Phoenix.2417", // Thay link facebook
        "instagram" => "https://www.instagram.com/nguyen_hoang_007?igsh=MWd5bm15d3N0d3JuOA==", // Thay link instagram
        "tiktok" => "https://www.tiktok.com/@taodangtapcode?_t=8qiMPrNSCB6&_r=1", // Thay link tiktok
        "threads" => "https://www.threads.net/@nguyen_hoang_007" // Thay link threads
    ];
    public function CommonMethod(){date_default_timezone_set('Asia/Ho_Chi_Minh');}
}


class ThanhDieuLoveDays implements ThanhDieuConfigInterface {
    public $ConfigLove = [
        "avatar_male" => "https://i.ibb.co/4YTGCZp/462542902-1065506111726507-7256633650961498635-n.jpg", // Thay đường dẫn tới thư mục chứa ảnh của bạn hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_male" => "Phoenix", // Thay tên của bạn
        //========================================================//
        "avatar_female" => "https://i.ibb.co/K95DSrC/download.jpg", // Thay đường dẫn tới thư mục chứa ảnh bạn gái hoặc up ảnh lấy link tại img.thanhdieu.com
        "name_female" => "Độc thân", // Thay tên đối phương
        //========================================================//
        "time_relashiption" => "24/01/2007 " // Định dạng ngày tháng năm: DD-MM-YYYY or / or :
        //========================================================//
    ];
    public function CommonMethod() {}
}
class ThanhDieuMusicList implements ThanhDieuConfigInterface {
    public $songs = [
        [
            "url" => "https://files.catbox.moe/4bjjfg.mp3",
            "avatar" => "https://i.ibb.co/Pt4ZJJd/that-girl-1545280005.jpg",
            "title" => "That Girl",
            "author" => "Olly Murs"
        ],
        [
            "url" => "https://files.catbox.moe/m8b4hr.mp3",
            "avatar" => "https://i.imgur.com/e28b0dD.png",
            "title" => "Thiên Lý Ơi",
            "author" => "Jack ( 5 Triệu )"
        ],
        [
            "url" => "https://files.catbox.moe/yrpft2.mp3",
            "avatar" => "https://i.imgur.com/DAaTklq.png",
            "title" => "Thuỷ Triều",
            "author" => "Quang Hùng MasterD"
        ],
        [
            "url" => "https://files.catbox.moe/jlat9a.mp3",
            "avatar" => "https://i.imgur.com/vp5Vsx5.png",
            "title" => "風立ちぬ ( Gió Nổi )",
            "author" => "周深"
        ],
        [
            "url" => "https://files.catbox.moe/hkqk6x.mp3",
            "avatar" => "https://i.imgur.com/GEOKT8b.png",
            "title" => "Chúng Ta Của Tương Lai",
            "author" => "Sơn Tùng M-TP"
        ],
        [
            "url" => "https://files.catbox.moe/acg0vl.mp3",
            "avatar" => "https://i.ibb.co/MDVY07s/619964de31327dbf8491d14d2c25533f.jpg",
            "title" => "Hoa Cỏ Lau",
            "author" => "Phong Max"
        ],
        [
            "url" => "https://files.catbox.moe/s8opab.mp3",
            "avatar" => "https://i.ibb.co/6R8V7S7/ed0741228ad36870e13624120474e50a.jpg",
            "title" => "Sau Lời Từ Khước",
            "author" => "Phan Mạnh Quỳnh"
        ],
        [
            "url" => "https://files.catbox.moe/gvqgma.mp3",
            "avatar" => "https://i.ibb.co/gvXHBqv/ab67616d0000b273ae85dfd27beee97a3a009f68.jpg",
            "title" => "Em Đã Xa Anh Remix",
            "author" => "Như Việt"
        ],
        [
            "url" => "https://files.catbox.moe/dvjckq.mp3",
            "avatar" => "https://i.ibb.co/VpFyXhS/ab44498b5b432879428719390baf1180-1490064587.jpg",
            "title" => "Anh Đã Quen Với Cô Đơn",
            "author" => "Soobin Hoàng Sơn"
        ],
        [
            "url" => "https://files.catbox.moe/kg5hco.mp3",
            "avatar" => "https://i.ibb.co/GM43qx9/Screenshot-2024-10-21-20-01-27-985-com-android-chrome.png",
            "title" => "Old town road",
            "author" => "Lil Nas X"
        ],
// Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
