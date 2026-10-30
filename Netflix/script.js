var danhSachPhim = [
   {
    id:1,
    ten: "Nhóc trùm trở lại",
    duongDanAnh:"../ảnh/1.1.jpg",
    duongDanYoutube:"https://www.youtube.com/embed/QPZZo-ZTOkc?si=6QDEgvTNFK9ZBUf6",
   },
   {
    id:2,
    ten: "Chú chó cá mập",
    duongDanAnh:"../ảnh/1.2.jpg",
    duongDanYoutube:"https://www.youtube.com/embed/X-VSgGDCSIM?si=ivTURR0yiArHbU3s",
   },
   {
    id:3,
    ten: "Mèo đi hia",
    duongDanAnh:"../ảnh/1.3.jpg",
    duongDanYoutube:"https://www.youtube.com/embed/cwveutEtHIA?si=nU73M9enUR5xzlis",
   },
   {
    id:4,
    ten: "Bố già",
    duongDanAnh:"../ảnh/bố già.jpg",
    duongDanYoutube:"https://www.youtube.com/embed/jluSu8Rw6YE?si=awTU36vajgj9Dr--", 
   },
   {
    id:5,
    ten: "Pikachu",
    duongDanAnh:"../ảnh/1.5.jpg",
    duongDanYoutube:"https://www.youtube.com/embed/1roy4o4tqQM?si=sdNqkaS1co-96948",
   }
];
function chonPhim(id){
    for (let i =0; i < danhSachPhim.length; i++) {
        if(danhSachPhim[i].id == id){
            document.getElementsByClassName("banner-img")[0].src= danhSachPhim[i].duongDanYoutube;
        }
    }
}