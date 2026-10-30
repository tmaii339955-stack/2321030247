var danhSachVid = [
    {
        id: 1,
        ten: "3 PHẢI 6 ĐỪNG - Quân A.P (Official MV)",
        duongDanAnh: "quanap.avif",
        duongDanYoutube: "https://www.youtube.com/embed/INJuqE_34eQ?si=wIpdXYXIPLEH_N65",
    },
    {
        id: 2,
        ten: "Bảo Anh - THẾ NÀO LÀ ĐÚNG? (OST CHỊ CHỊ EM EM 3) | MV OFFICIAL",
        duongDanAnh: "baihat1.avif",
        duongDanYoutube: "https://www.youtube.com/embed/kMlcXrUET8I?si=IovYXS6cHxBxg1PX",
    },
    {
        id: 3,
        ten: "Chi Pu (芝芙) | SAO EM CÒN? (OST Chị Chị Em Em 3) | Official MV",
        duongDanAnh: "chipu.avif",
        duongDanYoutube: "https://www.youtube.com/embed/4m5Jb-GpWJw?si=_3SRtS3g7bDGPp4L",
    },
    {
        id: 4,
        ten: "EMILY ft BIGDADDY - NHƯ TRONG PHIM (Official Music Video)",
        duongDanAnh: "baihat3.avif",
        duongDanYoutube: "https://www.youtube.com/embed/FMoVDz6rFHc?si=u3hvwPs-B4rKjk5V" 
    }
];

function chonBai(id){
    for (let i =0; i < danhSachVid.length; i++) {
        if(danhSachVid[i].id == id){
            document.getElementsByClassName("video")[0].src= danhSachVid[i].duongDanYoutube;
        }
    }
}