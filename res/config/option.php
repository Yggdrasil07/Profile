<?php
/**
 * @package thanhdieuv5 (tester)
 * @author  Vương Thanh Diệu 
 * @mod Hoàng Nguyễn
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
        "threads" => "https://www.threads.net/@nguyen_hoang_007", // Thay link threads
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
            "url" => "https://files.catbox.moe/89zswb.mp3",
            "avatar" => "https://i.ibb.co/j9CLnYG/Screenshot-2024-10-22-08-51-54-731-com-google-android-youtube.png",
            "title" => "Monody",
            "author" => "TheFatRat"
        ],
        [
            "url" => "https://files.catbox.moe/gvqgma.mp3",
            "avatar" => "https://i.ibb.co/gvXHBqv/ab67616d0000b273ae85dfd27beee97a3a009f68.jpg",
            "title" => "Em Đã Xa Anh Remix",
            "author" => "Như Việt"
        ],
        [
            "url" => "https://files.catbox.moe/w24ga4.mp3",
            "avatar" => "https://i.ibb.co/8mMTzqH/Screenshot-2024-10-22-09-42-45-636-com-google-android-youtube.png",
            "title" => "Trói em lại",
            "author" => "Quang Hùng MasterD"
        ],
        [
            "url" => "https://files.catbox.moe/kg5hco.mp3",
            "avatar" => "https://i.ibb.co/GM43qx9/Screenshot-2024-10-21-20-01-27-985-com-android-chrome.png",
            "title" => "Old town road",
            "author" => "Lil Nas X"
        ],
        [
            "url" => "https://files.catbox.moe/vdm5ri.mp3",
            "avatar" => "https://i.ibb.co/jGn2JJZ/Screenshot-2024-10-21-20-17-15-869-com-google-android-youtube.png",
            "title" => "Nhạc truyền cảm hứng, động lực",
            "author" => "HC Music"
        ],
        [
            "url" => "https://files.catbox.moe/7i708s.mp3",
            "avatar" => "https://i.ibb.co/WHGnrgC/Screenshot-2024-10-22-06-53-31-730-com-google-android-youtube.png",
            "title" => "Fire",
            "author" => "Alan Walker"
        ],
        [
            "url" => "https://files.catbox.moe/ejay1r.mp3",
            "avatar" => "https://i.ibb.co/tMspS2P/Screenshot-2024-10-22-06-51-27-018-com-google-android-youtube.png",
            "title" => "Có chắc yêu là đây",
            "author" => "Sơn Tùng M-TP"
        ],
        [
            "url" => "https://files.catbox.moe/mmqj9p.mp3",
            "avatar" => "https://i.ibb.co/V3J46vz/Screenshot-2024-10-22-06-55-34-285-com-google-android-youtube.png",
            "title" => "Magnetic",
            "author" => "ILLIT"
        ],
        [
            "url" => "https://files.catbox.moe/jlmlfm.mp3",
            "avatar" => "https://i.ibb.co/ZLd9kBw/Screenshot-2024-10-22-09-46-46-026-com-google-android-youtube.png",
            "title" => "Nevada",
            "author" => "VICETONE"
        ],  
// Thêm nhạc tại đây
    ];
    public function CommonMethod() {}
}
