
$(document).ready(function(){

    // XỬ LÝ PHẦN THÊM NHÓM SINH VIÊN 
    $('.btn_themNhom').click(function(e){
        e.preventDefault();
        var $manhom = $('.manhom').val();
        var $mssv = $('.mssv').val();
        var $vaitro = $('.vaitro').val();
        console.log($manhom);
        console.log($mssv);
        console.log($vaitro);
        $.ajax({
            url: './php/themNhomSV.php',
            type: 'post',
            dataType: 'html',
            data: {
                mn  : $manhom,
                msv : $mssv,
                vt  : $vaitro
            }
        }).done(function(ketqua){
            // $('.notify').html(ketqua);
            alert("Thêm Thành Công!!!"); 
        });
    });

    // XỬ LÝ PHẦN TÌM NHÓM
    $('.btn_tim_nhomSV').click(function(e){
        e.preventDefault();
        var $select_mn = $('.select_manhom').val();
        console.log($select_mn);
        $.ajax({
            url: './php/timDSNhom.php',
            type: 'post',
            dataType: 'html',
            data: {
                select_mn  : $select_mn
            }
        }).done(function(ketqua){
            displayData(ketqua);
        });
    });

    // HIỂN THỊ DANH SÁCH THÀNH VIÊN THEO NHÓM
    function displayData(data) {
        // Tạo và hiển thị dữ liệu lên trang web
        var tableBody = $('.tableBody_nhomSV');
        tableBody.empty();

        var dataArray = JSON.parse(data);

        if (Array.isArray(dataArray)) {
            // Nếu dataArray là mảng, lặp qua từng phần tử của mảng
            $.each(dataArray, function(index, row) {
                var tr = $('<tr class="custom__row_nhomSV"></tr>');
                // Thêm cột thứ tự
                var orderTd = $('<td class="td_content_nhomSV"></td>').text(index + 1);
                tr.append(orderTd);

                $.each(row, function(key, value) {
                    var td = $('<td class="td_content_nhomSV"></td>').text(value);
                    tr.append(td);
                });

                // Thêm nút delete để xóa 1 thành viên trong nhóm    
                var deleteTd = $('<td class="td_content_nhomSV"></td>');
                var deleteBtn = $('<button class="delete-button delete_btn_nhomSV"><svg class="delete-svgIcon" viewBox="0 0 448 512"> <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"> </path> </svg> </button>');
                deleteBtn.click(function() {
                    var row = $(this).closest('tr').find('td');
                    
                    var groupId = row.eq(1).text(); 
                    var studentId = row.eq(2).text();

                    console.log("GroupId:", groupId);
                    console.log("StudentId:", studentId);
                    deleteRowSVInNhom(groupId, studentId, row); //$(this).closest('tr')
                    row.remove();
                });
                deleteTd.append(deleteBtn);
                tr.append(deleteTd);
                tableBody.append(tr);
            });
        } else {
            var tr = $('<tr class="custom__row"></tr>');
            // Thêm cột thứ tự
            var orderTd = $('<td class="td_content"></td>').text(1);
            tr.append(orderTd);

            // Thêm cột mới
            var newTd = $('<td class="td_content"></td>');
            var newContent = $('<div></div>');
            newContent.text('Nội dung mới');
            newTd.append(newContent);
            tr.append(newTd);

            $.each(dataArray, function(key, value) {
                var td = $('<td class="td_content"></td>').text(value);
                tr.append(td);
            });

            // Thêm nút delete
            var deleteTd = $('<td class="td_content"></td>');
            var deleteBtn = $('<button class="delete-button"><svg class="delete-svgIcon" viewBox="0 0 448 512"> <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"> </path> </svg> </button>');
            deleteTd.append(deleteBtn);
            tr.append(deleteTd);

            tableBody.append(tr);
        }
    }

    // XỬ LÝ PHẦN XÓA THÀNH VIÊN NHÓM
    function deleteRowSVInNhom(groupId, studentId, row) {
        $.ajax({
            url: './php/delete_row_sv_in_nhom.php',
            type: 'POST',
            data: {
                groupId: groupId,
                studentId: studentId
            },
            success: function(response) {
                // Xóa dòng khỏi bảng
                row.remove();
            },
            error: function(xhr, status, error) {
                console.error('Lỗi khi xóa dòng:', error);
            }
        }).done(function(ketqua){
            alert("Xóa Thành Công!!!");
        });
    }


    // XỬ LÝ PHẦN THÊM NHÓM GIẢNG VIÊN 
    $('.btn_themNhomGV').click(function(e){
        e.preventDefault();
        var $manhomgv = $('.manhomgv').val();
        var $mgv = $('.mgv').val();
        var $vaitrogv = $('.vaitrogv').val();
        console.log($manhomgv);
        console.log($mgv);
        console.log($vaitrogv);
        $.ajax({
            url: './php/themNhomGV.php',
            type: 'post',
            dataType: 'html',
            data: {
                manhomgv  : $manhomgv,
                mgv       : $mgv,
                vaitrogv  : $vaitrogv
            }
        }).done(function(ketqua){
            if(ketqua == "insert successfully") {
                alert("Thêm Thành Công!!!"); 
            }
        });
    });

    // XỬ LÝ PHẦN TÌM NHÓM GIẢNG VIÊN
    $('.btn_tim_nhomGV').click(function(e){
        e.preventDefault();
        var $select_mngv = $('.select_manhomgv').val();
        console.log($select_mngv);
        $.ajax({
            url: './php/timDSNhomGV.php',
            type: 'post', 
            dataType: 'html',   // json
            data: {
                select_mngv  : $select_mngv
            }
        }).done(function(ketqua){
            displayDataGV(ketqua);
        });
    });

    // HIỂN THỊ DANH SÁCH THÀNH VIÊN THEO NHÓM GIẢNG VIÊN
    function displayDataGV(data) {
        // Tạo và hiển thị dữ liệu lên trang web
        var tableBody = $('.tableBody_nhomGV');
        tableBody.empty();

        var dataArray = JSON.parse(data);

        if (Array.isArray(dataArray)) {
            // Nếu dataArray là mảng, lặp qua từng phần tử của mảng
            $.each(dataArray, function(index, row) {
                var tr = $('<tr class="custom__row_nhomGV"></tr>');
                // Thêm cột thứ tự
                var orderTd = $('<td class="td_content_nhomGV"></td>').text(index + 1);
                tr.append(orderTd);

                $.each(row, function(key, value) {
                    var td = $('<td class="td_content_nhomGV"></td>').text(value);
                    tr.append(td);
                });

                // Thêm nút delete để xóa 1 thành viên trong nhóm    
                var deleteTd = $('<td class="td_content_nhomGV"></td>');
                var deleteBtn = $('<button class="delete-button delete_btn_nhomGV"><svg class="delete-svgIcon" viewBox="0 0 448 512"> <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"> </path> </svg> </button>');
                deleteBtn.click(function() {
                    var row = $(this).closest('tr').find('td');
                    
                    var groupId = row.eq(1).text(); 
                    var teacherId = row.eq(2).text();

                    console.log("GroupId:", groupId);
                    console.log("TeacherId:", teacherId);
                    deleteRowGVInNhom(groupId, teacherId, row); //$(this).closest('tr')
                    row.remove();
                });
                deleteTd.append(deleteBtn);
                tr.append(deleteTd);
                tableBody.append(tr);
            });
        }
    }

    // XỬ LÝ PHẦN XÓA THÀNH VIÊN NHÓM GIẢNG VIÊN
    function deleteRowGVInNhom(groupId, teachreId, row) {
        $.ajax({
            url: './php/delete_row_gv_in_nhomgv.php',
            type: 'POST',
            data: {
                groupId: groupId,
                teacherId: teachreId
            },
            success: function(response) {
                // Xóa dòng khỏi bảng
                if (response == "delete successfully"){
                    row.remove();
                    alert("Xóa Thành Công!!!"); 
                }
            },
            error: function(xhr, status, error) {
                console.error('Lỗi khi xóa dòng:', error);
            }
        });
    }



    // XỬ LÝ PHẦN CHECKBOX CHỌN LOẠI ĐỀ TÀI - Thêm đề tài
    const checkbox = document.getElementById('cbox_dangkydt');
    const formdkdt_khoa = document.querySelector('.formdkdt_khoa');
    const formdkdt_truong = document.querySelector('.formdkdt_truong');

    checkbox.addEventListener('change', function() {
    if (this.checked) {
        formdkdt_truong.classList.remove('hide');
        formdkdt_khoa.classList.add('hide');
    } else {
        formdkdt_truong.classList.add('hide');
        formdkdt_khoa.classList.remove('hide');
    }
    });

    
    // THÊM ĐỀ TÀI CẤP KHOA - SINH VIÊN
    $('.btn_themDeTai').click(function(e){
        e.preventDefault();
        var $madetai = $('.dkdetai_madetai').val();
        var $dkdetai_manhom = $('.dkdetai_select_manhom').val();
        var $dkdetai_tendetai = $('.dkdetai_tendetai').val();
        var $ghichu = $('.dkdetai_ghichu').val();
        var $ngaythuchien = $('.dkdetai_ngaythuchien').val();
        var $ngayketthuc = $('.dkdetai_ngayketthuc').val();
        var $kinhphi = $('.dkdetai_kinhphidukien').val();
        var $magiangvien = $('.dkdetai_select_magiangvien').val();
        console.log($madetai);
        console.log($ngaythuchien);
        console.log($ngayketthuc);
        $.ajax({
            url: './php/themDeTai.php',
            type: 'post',
            dataType: 'json',
            data: {
                mdt  : $madetai,
                dkdt_manhom : $dkdetai_manhom,
                tendt : $dkdetai_tendetai,
                ghichu  : $ghichu,
                ngayTH : $ngaythuchien,
                ngayKT : $ngayketthuc,
                kinhphi : $kinhphi,
                mgv : $magiangvien
            }
        }).done(function(response){
            console.log(response);
            // Thêm dòng mới vào bảng
            var newRow = $('<tr class="dkdetai_custom__row"></tr>');
            newRow.append(`<td>${response.mdt}</td>`);
            newRow.append(`<td>${response.dkdt_manhom}</td>`);
            newRow.append(`<td>${response.tendt}</td>`);
            newRow.append(`<td>${response.ghichu}</td>`);
            newRow.append(`<td>${response.ngayTH}</td>`);
            newRow.append(`<td>${response.ngayKT}</td>`);
            newRow.append(`<td>${response.kinhphi}</td>`);
            newRow.append(`<td>${response.mgv}</td>`);
            $('.dkdetai_tableBodyGV').append(newRow);
            alert("Thêm Thành Công!!!");
        });
    });
    

    // THÊM ĐỀ TÀI CẤP TRƯỜNG - GIẢNG VIÊN
    $('.btn_themDeTaiGV').click(function(e){
        e.preventDefault();
        var $madetai = $('.dkdetai_madetaigv').val();
        var $dkdetai_manhom = $('.dkdetai_select_manhomgv').val();
        var $dkdetai_tendetai = $('.dkdetai_tendetaigv').val();
        var $ghichu = $('.dkdetai_ghichugv').val();
        var $ngaythuchien = $('.dkdetai_ngaythuchiengv').val();
        var $ngayketthuc = $('.dkdetai_ngayketthucgv').val();
        var $kinhphi = $('.dkdetai_kinhphidukiengv').val();
        var $magiangvien = $('.dkdetai_select_covangv').val();
        console.log($madetai);
        console.log($ngaythuchien);
        console.log($ngayketthuc);
        $.ajax({
            url: './php/themDeTaiGV.php',
            type: 'post',
            dataType: 'html',
            data: {
                mdt  : $madetai,
                dkdt_manhom : $dkdetai_manhom,
                tendt : $dkdetai_tendetai,
                ghichu  : $ghichu,
                ngayTH : $ngaythuchien,
                ngayKT : $ngayketthuc,
                kinhphi : $kinhphi,
                mgv : $magiangvien
            }
        }).done(function(response){
            var data = JSON.parse(response);
            console.log(response);
            // Thêm dòng mới vào bảng
            var newRow = $('<tr class="dkdetai_custom__row"></tr>');
            newRow.append(`<td>${data.mdt}</td>`);
            newRow.append(`<td>${data.dkdt_manhom}</td>`);
            newRow.append(`<td>${data.tendt}</td>`);
            newRow.append(`<td>${data.ghichu}</td>`);
            newRow.append(`<td>${data.ngayTH}</td>`);
            newRow.append(`<td>${data.ngayKT}</td>`);
            newRow.append(`<td>${data.kinhphi}</td>`);
            newRow.append(`<td>${data.mgv}</td>`);
            $('.dkdetai_tableBodyGV').append(newRow);
            alert("Thêm Thành Công!!!");
        });
    });

    // XỬ LÝ PHẦN THÊM HỘI ĐỒNG
    $('.btn_themHoiDong').click(function(e){
        e.preventDefault();
        var $mahoidong = $('.mahoidong').val();
        var $mgv = $('.mgv').val();
        var $hd_vaitro = $('.hoidong_vaitro').val();
        console.log($mahoidong);
        console.log($mgv);
        console.log($hd_vaitro);
        $.ajax({
            url: './php/themHoiDong.php',
            type: 'post',
            dataType: 'html',
            data: {
                mahoidong  : $mahoidong,
                mgv : $mgv,
                hd_vaitro  : $hd_vaitro
            }
        }).done(function(ketqua){
            alert("Thêm Thành Công!!!");
        });
    });

    // XỬ LÝ PHẦN TÌM NHÓM HỘI ĐỒNG
    $('.btn_tim_nhomHD').click(function(e){
        e.preventDefault();
        var $select_mahoidong = $('.select_mahoidong').val();
        console.log($select_mahoidong);
        $.ajax({
            url: './php/timDSHoiDong.php',
            type: 'post',
            dataType: 'html',
            data: {
                select_mhd  : $select_mahoidong
            }
        }).done(function(ketqua){
            displayData_HoiDong(ketqua); 
        });
    });

    // HIỂN THỊ DANH SÁCH THÀNH VIÊN TRONG HỘI ĐỒNG
    function displayData_HoiDong(data) {
        // Tạo và hiển thị dữ liệu lên trang web
        var tableBody = $('.tableBody_hoidong');
        tableBody.empty();

        var dataArray = JSON.parse(data);

        if (Array.isArray(dataArray)) {
            // Nếu dataArray là mảng, lặp qua từng phần tử của mảng
            $.each(dataArray, function(index, row) {
                var tr = $('<tr class="custom__row_hoidong"></tr>');
                // Thêm cột thứ tự
                var orderTd = $('<td class="td_content_hoidong"></td>').text(index + 1);
                tr.append(orderTd);

                $.each(row, function(key, value) {
                    var td = $('<td class="td_content_hoidong"></td>').text(value);
                    tr.append(td);
                });

                // Thêm nút delete để xóa 1 thành viên trong nhóm    
                var deleteTd = $('<td class="td_content_hoidong"></td>');
                var deleteBtn = $('<button class="delete-button delete_btn_hoidong"><svg class="delete-svgIcon" viewBox="0 0 448 512"> <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"> </path> </svg> </button>');
                deleteBtn.click(function() {
                    var row = $(this).closest('tr').find('td');
                    
                    var groupId = row.eq(1).text(); 
                    var teacherId = row.eq(2).text();

                    console.log("GroupId:", groupId);
                    console.log("StudentId:", teacherId);
                    deleteRowGVInHoiDong(groupId, teacherId, row); //$(this).closest('tr')
                    row.remove();
                });
                deleteTd.append(deleteBtn);
                tr.append(deleteTd);
                tableBody.append(tr);
            });
        }
    }

  // XỬ LÝ PHẦN XÓA THÀNH VIÊN HỘI ĐỒNG
    function deleteRowGVInHoiDong(groupId, teacherId, row) {
        $.ajax({
            url: './php/delete_row_gv_in_hoidong.php',
            type: 'POST',
            data: {
                groupId: groupId,
                teacherId: teacherId
            },
            // success: function(response) {
            //     // Xóa dòng khỏi bảng
            //     row.remove();
            // },
            error: function(xhr, status, error) {
              console.error('Lỗi khi xóa dòng:', error);
            }
        }).done(function(ketqua){
            alert("Xóa Thành Công!!!");
        });
    }


    const checkbox_ghdt = document.getElementById('cbox_giahandt');
    const formghdt_khoa = document.querySelector('.formghdt_khoa');
    const formghdt_truong = document.querySelector('.formghdt_truong');

    // Thêm sự kiện change vào checkbox
    checkbox_ghdt.addEventListener('change', function() {
        if (this.checked) {
            formghdt_truong.classList.remove('hide');
            formghdt_khoa.classList.add('hide');
        } else {
            formghdt_truong.classList.add('hide');
            formghdt_khoa.classList.remove('hide');
        }
    });

    // Xử lý phần nhấn nút duyệt gia hạn đề tài cấp khoa
    $('.btn_giaHanDeTai').click( function(e){
        e.preventDefault();
        var $madetai = $('.ghdetai_select_madetai').val();
        var $ngaygiahan = $('.ghdetai_ngaygiahan').val();
        var $ngayhoanthanh = $('.ghdetai_ngayhoanthanh').val();
        var $lydo = $('.ghdetai_lydo').val();
        console.log($madetai);
        $.ajax({
            url: './php/duyetGiaHanDetai.php',
            type: 'POST',
            data: {
                madetai : $madetai,
                ngaygiahan : $ngaygiahan,
                ngayhoanthanh : $ngayhoanthanh,
                lydo : $lydo
            },
            error: function(xhr, status, error) {
            //   console.error('Lỗi khi xóa dòng:', error);
                
            }
        }).done(function(ketqua){
            // alert(ketqua);
            if(ketqua == "okok"){
                alert("Gia Hạn Đề Tài Thành Công!");
            }
        });

    })

    // Xử lý phần nhấn nút duyệt gia hạn đề tài cấp trường
    $('.btn_giaHanDeTaiGV').click( function(e){
        e.preventDefault();
        var $madetai = $('.ghdetai_select_madetaiGV').val();
        var $ngaygiahan = $('.ghdetai_ngaygiahanGV').val();
        var $ngayhoanthanh = $('.ghdetai_ngayhoanthanhGV').val();
        var $lydo = $('.ghdetai_lydoGV').val();
        console.log($madetai);
        $.ajax({
            url: './php/duyetGiaHanDetaiGV.php',
            type: 'POST',
            data: {
                madetai : $madetai,
                ngaygiahan : $ngaygiahan,
                ngayhoanthanh : $ngayhoanthanh,
                lydo : $lydo
            },
            error: function(xhr, status, error) {
            //   console.error('Lỗi khi xóa dòng:', error);
                
            }
        }).done(function(ketqua){
            // alert(ketqua);
            if(ketqua == "okok"){
                alert("Gia Hạn Đề Tài Cấp Trường Thành Công!");
            }
        });

    })

    // CHECK BOX chọn options duyệt đề tài cấp trường
    const checkbox_duyetdt = document.getElementById('cbox_duyetdt');
    const dsdtchoduyet_khoa = document.querySelector('.dsdtchoduyet_khoa');
    const dsdtchoduyet_truong = document.querySelector('.dsdtchoduyet_truong');

    // Thêm sự kiện change vào checkbox
    checkbox_duyetdt.addEventListener('change', function() {
        if (this.checked) {
            dsdtchoduyet_truong.classList.remove('hide');
            dsdtchoduyet_khoa.classList.add('hide');
        } else {
            dsdtchoduyet_truong.classList.add('hide');
            dsdtchoduyet_khoa.classList.remove('hide');
        }
    });

  
    // PHẦN XỬ LÝ PHÂN TRANG CHO PHẦN DUYỆT ĐỀ TÀI CẤP KHOA
    let content_duyetDT = document.querySelector('#tableBody_dsDetai');
    let preBtn = document.querySelector('#pre');
    let nextBtn = document.querySelector('#next');
    let current = document.querySelector('#current');
    let currentPage = 1;
    let pageSize = 5;
    
    ajaxGetDsDetai();

    async function ajaxGetDsDetai() {
        let d1 = await fetch(`http://localhost/DoAnNCKHv3/php/getDataDuyetDT.php?page=${currentPage}&pageSize=${pageSize}`);
        let d2 = await d1.json();
        console.log(d2);

        inDuLieu(d2);

        inPhanTrang(d2);

        // Click nút xem chi tiết đề tài
        const btnChiTietDeTai = document.querySelectorAll('.btn_chiTietDeTai');
        btnChiTietDeTai.forEach(btn => {
            btn.addEventListener('click', (event) => {
                event.preventDefault();
                const maDeTai = btn.dataset.madetai;
                console.log(maDeTai);
                window.location.href = `/DoAnNCKHv3/chiTietDeTai.php?mdt=${maDeTai}`;
            });
        });
                
        // Click nút xóa đề tài
        const btnDeleteDetai = document.querySelectorAll('.button_deleteDetai');
        btnDeleteDetai.forEach(btn => {
            btn.addEventListener('click', () => {
                const maDeTai = btn.dataset.madetai;
                console.log('Mã đề tài:', maDeTai);
                $.ajax({
                    url: './php/deleteDataRecordDetai.php',
                    type: 'POST',
                    data: {
                        madetai : maDeTai
                    },
                    error: function(xhr, status, error) {
                      console.error('Lỗi khi xóa dòng:', error);
                    }
                }).done(function(ketqua){
                    alert("Xóa Thành Công!!!");
                    window.location.href = 'homePage.php';
                });   
            });
        });

        // Click nút duyệt đề tài  
        const btnDuyetDetai = document.querySelectorAll('.btn_duyetDT');
        btnDuyetDetai.forEach(btn => {
            btn.addEventListener('click', () => {
                const maDeTai = btn.dataset.madetai;
                console.log('Mã đề tài:', maDeTai);
                $.ajax({
                    url: './php/duyetDetai.php',
                    type: 'POST',
                    data: {
                        madetai : maDeTai
                    },
                    error: function(xhr, status, error) {
                    //   console.error('Lỗi khi xóa dòng:', error);
                    }
                }).done(function(ketqua){
                    // Tìm dòng tương ứng với maDeTai và xóa nó khỏi table
                    const rowToRemove = btn.closest('tr');
                    if (rowToRemove) {
                        rowToRemove.remove();
                        alert("Đã Duyệt!!!");
                    }          
                });   
            });
        });
    }

    function inDuLieu(data){
        // let content_duyetDT = document.querySelector('#tableBody_dsDetai');          onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTai.php?mdt=${record.MaDeTai}'"
        let content_duyetDT_str = data.records.map(record => `
            <tr>
                <td class="">${record.MaDeTai}</td>
                <td class="">${record.MaNhom}</td>
                <td class="">${record.TenDeTai}</td>
                <td class="">${new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(record.KinhPhiDuKien)}</td>
                <td class="">${record.HoTenGV}</td>
                <td class="">
                    <button tabindex="0" class="plusButton btn_chiTietDeTai" data-madetai="${record.MaDeTai}">
                        <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                            <g mask="url(#mask0_21_345)">
                            <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
                            </g>
                        </svg>
                    </button>
                </td>
                <td class="">
                    <button class="button_deleteDetai" data-madetai="${record.MaDeTai}">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 69 14"
                            class="svgIcon bin-top"
                        >
                            <g clip-path="url(#clip0_35_24)">
                            <path
                                fill="black"
                                d="M20.8232 2.62734L19.9948 4.21304C19.8224 4.54309 19.4808 4.75 19.1085 4.75H4.92857C2.20246 4.75 0 6.87266 0 9.5C0 12.1273 2.20246 14.25 4.92857 14.25H64.0714C66.7975 14.25 69 12.1273 69 9.5C69 6.87266 66.7975 4.75 64.0714 4.75H49.8915C49.5192 4.75 49.1776 4.54309 49.0052 4.21305L48.1768 2.62734C47.3451 1.00938 45.6355 0 43.7719 0H25.2281C23.3645 0 21.6549 1.00938 20.8232 2.62734ZM64.0023 20.0648C64.0397 19.4882 63.5822 19 63.0044 19H5.99556C5.4178 19 4.96025 19.4882 4.99766 20.0648L8.19375 69.3203C8.44018 73.0758 11.6746 76 15.5712 76H53.4288C57.3254 76 60.5598 73.0758 60.8062 69.3203L64.0023 20.0648Z"
                            ></path>
                            </g>
                            <defs>
                            <clipPath id="clip0_35_24">
                                <rect fill="white" height="14" width="69"></rect>
                            </clipPath>
                            </defs>
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 69 57"
                            class="svgIcon bin-bottom"
                        >
                            <g clip-path="url(#clip0_35_22)">
                            <path
                                fill="black"
                                d="M20.8232 -16.3727L19.9948 -14.787C19.8224 -14.4569 19.4808 -14.25 19.1085 -14.25H4.92857C2.20246 -14.25 0 -12.1273 0 -9.5C0 -6.8727 2.20246 -4.75 4.92857 -4.75H64.0714C66.7975 -4.75 69 -6.8727 69 -9.5C69 -12.1273 66.7975 -14.25 64.0714 -14.25H49.8915C49.5192 -14.25 49.1776 -14.4569 49.0052 -14.787L48.1768 -16.3727C47.3451 -17.9906 45.6355 -19 43.7719 -19H25.2281C23.3645 -19 21.6549 -17.9906 20.8232 -16.3727ZM64.0023 1.0648C64.0397 0.4882 63.5822 0 63.0044 0H5.99556C5.4178 0 4.96025 0.4882 4.99766 1.0648L8.19375 50.3203C8.44018 54.0758 11.6746 57 15.5712 57H53.4288C57.3254 57 60.5598 54.0758 60.8062 50.3203L64.0023 1.0648Z"
                            ></path>
                            </g>
                            <defs>
                            <clipPath id="clip0_35_22">
                                <rect fill="white" height="57" width="69"></rect>
                            </clipPath>
                            </defs>
                        </svg>
                    </button>
                </td>
                <td class="">
                    <button class="action_has has_liked btn_duyetDT" aria-label="like" type="button" data-madetai="${record.MaDeTai}">
                        <span data-icon=""
                            ><svg
                            data-icon="aoeri"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            stroke-linejoin="round"
                            stroke-linecap="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            fill="none"
                            >
                            <path
                                d="m8.05,11.99c0-.84.28-1.07,1.2-1.25,1.6-.31,2.35-.74,3.14-1.54,1.19-1.21,1.58-1.97,2.18-3.24.66-1.69,1.55-2.82,3.04-2.76.9.03,2.33.8,1.67,2.72-.31.9-1.98,3.61-2.23,4.23-.18.46.4.8.8.8h2.5c1.2,0,2.2,1,2.2,2.2l-1.1,5.6c-.3,1.5-1.02,2.23-2.2,2.2h-7.6c-2,0-3.6-1.6-3.6-3.6v-5.35Z"
                                data-d="thumb"
                            ></path>
                            <path
                                d="m5.4,19.9c0,.6-.5,1.1-1.1,1.1h-1c-1,0-1.9-.9-1.9-1.9v-6.3c0-1,.9-1.9,1.9-1.9h.9c.7,0,1.2.6,1.2,1.2v7.7Z"
                                data-d="sleeves"
                            ></path></svg
                        ></span>
                    </button>
                </td> 
            </tr>
        `).join('');

        content_duyetDT.innerHTML = content_duyetDT_str;
    }

    function inPhanTrang(data){
        // let preBtn = document.querySelector('#pre');
        // let nextBtn = document.querySelector('#next');
        // let current = document.querySelector('#current');
        // let currentPage = 1;
        // let pageSize = 5;
        let maxPage = Math.floor(data.totalRecords / pageSize) + 1;
        console.log("max page = ", maxPage);

        current.innerHTML = currentPage;
        // ẩn hiện nút next, pre 
        if (currentPage < maxPage) {
            nextBtn.classList.remove('hide');
        } else {
            nextBtn.classList.add('hide');
        }

        if (currentPage > 1) {
            preBtn.classList.remove('hide');
        } else {
            preBtn.classList.add('hide');
        }
    }

    nextBtn.addEventListener('click', function(){
        currentPage++;
        ajaxGetDsDetai();
    });

    preBtn.addEventListener('click', function(){
        currentPage--;
        ajaxGetDsDetai();
    });



    // PHẦN XỬ LÝ PHÂN TRANG CHO PHẦN DUYỆT ĐỀ TÀI CẤP TRƯỜNG
    let content_duyetDTGV = document.querySelector('#tableBody_dsDetaiGV');
    let preBtnGV = document.querySelector('#preGV');
    let nextBtnGV = document.querySelector('#nextGV');
    let currentGV = document.querySelector('#currentGV');
    let currentPageGV = 1;
    let pageSizeGV = 5;
    
    ajaxGetDsDetaiGV();

    async function ajaxGetDsDetaiGV() {
        let d1 = await fetch(`http://localhost/DoAnNCKHv3/php/getDataDuyetDTGV.php?page=${currentPageGV}&pageSize=${pageSizeGV}`);
        let d2 = await d1.json();
        console.log(d2);

        inDuLieuGV(d2);

        inPhanTrangGV(d2);

        //Click nút xem chi tiết đề tài
        const btnChiTietDeTaiGV = document.querySelectorAll('.btn_chiTietDeTaiGV');
        btnChiTietDeTaiGV.forEach(btn => {
            btn.addEventListener('click', (event) => {
                event.preventDefault();
                const maDeTai = btn.dataset.madetai;
                console.log(maDeTai);
                window.location.href = `/DoAnNCKHv3/chiTietDeTaiGV.php?mdt=${maDeTai}`;
            });
        });
                
        // Click nút xóa đề tài
        const btnDeleteDetaiGV = document.querySelectorAll('.button_deleteDetaiGV');
        btnDeleteDetaiGV.forEach(btn => {
            btn.addEventListener('click', () => {
                const maDeTai = btn.dataset.madetai;
                console.log('Mã đề tài:', maDeTai);
                $.ajax({
                    url: './php/deleteDataRecordDetaiGV.php',
                    type: 'POST',
                    data: {
                        madetai : maDeTai
                    },
                    error: function(xhr, status, error) {
                      console.error('Lỗi khi xóa dòng:', error);
                    }
                }).done(function(ketqua){
                    if(ketqua == "ok"){
                        alert("Xóa Thành Công!!!");
                        window.location.href = 'homePage.php';
                    }
                });   
            });
        });

        // Click nút duyệt đề tài  
        const btnDuyetDetaiGV = document.querySelectorAll('.btn_duyetDTGV');
        btnDuyetDetaiGV.forEach(btn => {
            btn.addEventListener('click', () => {
                const maDeTai = btn.dataset.madetai;
                console.log('Mã đề tài:', maDeTai);
                $.ajax({
                    url: './php/duyetDetaiGV.php',
                    type: 'POST',
                    data: {
                        madetai : maDeTai
                    },
                    error: function(xhr, status, error) {
                    //   console.error('Lỗi khi xóa dòng:', error);
                    }
                }).done(function(ketqua){
                    // Tìm dòng tương ứng với maDeTai và xóa nó khỏi table
                    const rowToRemove = btn.closest('tr');
                    if (rowToRemove) {
                        rowToRemove.remove();
                        alert("Đã Duyệt!!!");
                    }          
                });   
            });
        });
    }

    function inDuLieuGV(data){
        // let content_duyetDT = document.querySelector('#tableBody_dsDetai');          onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTai.php?mdt=${record.MaDeTai}'"
        let content_duyetDT_str = data.records.map(record => `
            <tr>
                <td class="">${record.MaDeTaiGV}</td>
                <td class="">${record.MaNhomGV}</td>
                <td class="">${record.TenDeTai}</td>
                <td class="">${new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(record.KinhPhiDuKien)}</td>
                <td class="">${record.HoTenGV}</td>
                <td class="">
                    <button tabindex="0" class="plusButton btn_chiTietDeTaiGV" data-madetai="${record.MaDeTaiGV}">
                        <svg class="plusIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                            <g mask="url(#mask0_21_345)">
                            <path d="M13.75 23.75V16.25H6.25V13.75H13.75V6.25H16.25V13.75H23.75V16.25H16.25V23.75H13.75Z"></path>
                            </g>
                        </svg>
                    </button>
                </td>
                <td class="">
                    <button class="button_deleteDetaiGV" data-madetai="${record.MaDeTaiGV}">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 69 14"
                            class="svgIcon bin-top"
                        >
                            <g clip-path="url(#clip0_35_24)">
                            <path
                                fill="black"
                                d="M20.8232 2.62734L19.9948 4.21304C19.8224 4.54309 19.4808 4.75 19.1085 4.75H4.92857C2.20246 4.75 0 6.87266 0 9.5C0 12.1273 2.20246 14.25 4.92857 14.25H64.0714C66.7975 14.25 69 12.1273 69 9.5C69 6.87266 66.7975 4.75 64.0714 4.75H49.8915C49.5192 4.75 49.1776 4.54309 49.0052 4.21305L48.1768 2.62734C47.3451 1.00938 45.6355 0 43.7719 0H25.2281C23.3645 0 21.6549 1.00938 20.8232 2.62734ZM64.0023 20.0648C64.0397 19.4882 63.5822 19 63.0044 19H5.99556C5.4178 19 4.96025 19.4882 4.99766 20.0648L8.19375 69.3203C8.44018 73.0758 11.6746 76 15.5712 76H53.4288C57.3254 76 60.5598 73.0758 60.8062 69.3203L64.0023 20.0648Z"
                            ></path>
                            </g>
                            <defs>
                            <clipPath id="clip0_35_24">
                                <rect fill="white" height="14" width="69"></rect>
                            </clipPath>
                            </defs>
                        </svg>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 69 57"
                            class="svgIcon bin-bottom"
                        >
                            <g clip-path="url(#clip0_35_22)">
                            <path
                                fill="black"
                                d="M20.8232 -16.3727L19.9948 -14.787C19.8224 -14.4569 19.4808 -14.25 19.1085 -14.25H4.92857C2.20246 -14.25 0 -12.1273 0 -9.5C0 -6.8727 2.20246 -4.75 4.92857 -4.75H64.0714C66.7975 -4.75 69 -6.8727 69 -9.5C69 -12.1273 66.7975 -14.25 64.0714 -14.25H49.8915C49.5192 -14.25 49.1776 -14.4569 49.0052 -14.787L48.1768 -16.3727C47.3451 -17.9906 45.6355 -19 43.7719 -19H25.2281C23.3645 -19 21.6549 -17.9906 20.8232 -16.3727ZM64.0023 1.0648C64.0397 0.4882 63.5822 0 63.0044 0H5.99556C5.4178 0 4.96025 0.4882 4.99766 1.0648L8.19375 50.3203C8.44018 54.0758 11.6746 57 15.5712 57H53.4288C57.3254 57 60.5598 54.0758 60.8062 50.3203L64.0023 1.0648Z"
                            ></path>
                            </g>
                            <defs>
                            <clipPath id="clip0_35_22">
                                <rect fill="white" height="57" width="69"></rect>
                            </clipPath>
                            </defs>
                        </svg>
                    </button>
                </td>
                <td class="">
                    <button class="action_has has_liked btn_duyetDTGV" aria-label="like" type="button" data-madetai="${record.MaDeTaiGV}">
                        <span data-icon=""
                            ><svg
                            data-icon="aoeri"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="20"
                            height="20"
                            stroke-linejoin="round"
                            stroke-linecap="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            fill="none"
                            >
                            <path
                                d="m8.05,11.99c0-.84.28-1.07,1.2-1.25,1.6-.31,2.35-.74,3.14-1.54,1.19-1.21,1.58-1.97,2.18-3.24.66-1.69,1.55-2.82,3.04-2.76.9.03,2.33.8,1.67,2.72-.31.9-1.98,3.61-2.23,4.23-.18.46.4.8.8.8h2.5c1.2,0,2.2,1,2.2,2.2l-1.1,5.6c-.3,1.5-1.02,2.23-2.2,2.2h-7.6c-2,0-3.6-1.6-3.6-3.6v-5.35Z"
                                data-d="thumb"
                            ></path>
                            <path
                                d="m5.4,19.9c0,.6-.5,1.1-1.1,1.1h-1c-1,0-1.9-.9-1.9-1.9v-6.3c0-1,.9-1.9,1.9-1.9h.9c.7,0,1.2.6,1.2,1.2v7.7Z"
                                data-d="sleeves"
                            ></path></svg
                        ></span>
                    </button>
                </td> 
            </tr>
        `).join('');

        content_duyetDTGV.innerHTML = content_duyetDT_str;
    }

    function inPhanTrangGV(data){
        let maxPage = Math.floor(data.totalRecords / pageSize) + 1;
        console.log("max page = ", maxPage);

        currentGV.innerHTML = currentPageGV;
        // ẩn hiện nút next, pre 
        if (currentPageGV < maxPage) {
            nextBtnGV.classList.remove('hide');
        } else {
            nextBtnGV.classList.add('hide');
        }

        if (currentPageGV > 1) {
            preBtnGV.classList.remove('hide');
        } else {
            preBtnGV.classList.add('hide');
        }
    }

    nextBtnGV.addEventListener('click', function(){
        currentPageGV++;
        ajaxGetDsDetaiGV();
    });

    preBtnGV.addEventListener('click', function(){
        currentPageGV--;
        ajaxGetDsDetaiGV();
    });



    // CHECK BOX chọn options nghiệm thu đề tài cấp trường
    const checkbox_nghiemthudt = document.getElementById('cbox_nghiemthudt');
    const select_mdt_khoa = document.querySelector('.nghiemthu_select_madetai');
    const select_mdt_truong = document.querySelector('.nghiemthu_select_madetaiGV');
    const btn_luu_khoa = document.querySelector('.btn_luuKQNghiemThu');
    const btn_capnhat_khoa = document.querySelector('.btn_suaKQNghiemThu');
    const btn_luu_truong = document.querySelector('.btn_luuKQNghiemThuGV');
    const btn_capnhat_truong = document.querySelector('.btn_suaKQNghiemThuGV');

    // Thêm sự kiện change vào checkbox
    checkbox_nghiemthudt.addEventListener('change', function() {
        if (this.checked) {
            select_mdt_truong.classList.remove('hide');
            btn_luu_truong.classList.remove('hide');
            btn_capnhat_truong.classList.remove('hide');
            select_mdt_khoa.classList.add('hide');
            btn_luu_khoa.classList.add('hide');
            btn_capnhat_khoa.classList.add('hide');
        } else {
            select_mdt_truong.classList.add('hide');
            btn_luu_truong.classList.add('hide');
            btn_capnhat_truong.classList.add('hide');
            select_mdt_khoa.classList.remove('hide');
            btn_luu_khoa.classList.remove('hide');
            btn_capnhat_khoa.classList.remove('hide');
        }
    });

    // Xử lý nút Lưu trong phần nghiệm thu đề tài
    $('.btn_luuKQNghiemThu').click(function() {
        var $madetai = $('.nghiemthu_select_madetai').val();
        var $mahoidong = $('.nghiemthu_select_mahoidong').val();
        var $danhgia = $('.nghiemthu_danhgia').val();
        var $diem = $('.nghiemthu_diem').val();
        var $ngaynghiemthu = $('.nghiemthu_ngaynghiemthu').val();
        var $fileBC = $('.nghiemthu_fileBC')[0].files[0];        

        var formData = new FormData();
        formData.append('madetai', $madetai);
        formData.append('mahoidong', $mahoidong);
        formData.append('danhgia', $danhgia);
        formData.append('diem', $diem);
        formData.append('ngaynghiemthu', $ngaynghiemthu);
        formData.append('fileBC', $fileBC);
      
        $.ajax({
            url: './php/uploadFileBC.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                // Xử lý kết quả trả về từ server
                var path = "php/uploadFile/";
                var embedFileBC = $(`<embed type="application/pdf" src="${path + response}" width="400" height="300"></embed>`);
                $('.showFileBC').append(embedFileBC);
                alert("Luư trữ hoàn tất");
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Xử lý lỗi nếu có
            }
        });
    });

    // Xử lý nút Cập Nhật trong phần nghiệm thu đề tài
    $('.btn_suaKQNghiemThu').click(function() {
        var $madetai = $('.nghiemthu_select_madetai').val();
        var $mahoidong = $('.nghiemthu_select_mahoidong').val();
        var $danhgia = $('.nghiemthu_danhgia').val();
        var $diem = $('.nghiemthu_diem').val();
        var $ngaynghiemthu = $('.nghiemthu_ngaynghiemthu').val();
        var $fileBC = $('.nghiemthu_fileBC')[0].files[0];        

        var formData = new FormData();
        formData.append('madetai', $madetai);
        formData.append('mahoidong', $mahoidong);
        formData.append('danhgia', $danhgia);
        formData.append('diem', $diem);
        formData.append('ngaynghiemthu', $ngaynghiemthu);
        formData.append('fileBC', $fileBC);
      
        $.ajax({
            url: './php/updateNghiemThuDT.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                // Xử lý kết quả trả về từ server
                var path = "php/uploadFile/";
                var embedFileBC = $(`<embed type="application/pdf" src="${path + response}" width="400" height="300"></embed>`);
                $('.showFileBC').append(embedFileBC);
                alert("Luư trữ hoàn tất");
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Xử lý lỗi nếu có
            }
        });
    });

    // Xử lý nút Lưu trong phần nghiệm thu đề tài Giảng Viên
    $('.btn_luuKQNghiemThuGV').click(function() {
        var $madetai = $('.nghiemthu_select_madetaiGV').val();
        var $mahoidong = $('.nghiemthu_select_mahoidong').val();
        var $danhgia = $('.nghiemthu_danhgia').val();
        var $diem = $('.nghiemthu_diem').val();
        var $ngaynghiemthu = $('.nghiemthu_ngaynghiemthu').val();
        var $fileBC = $('.nghiemthu_fileBC')[0].files[0];        

        var formData = new FormData();
        formData.append('madetai', $madetai);
        formData.append('mahoidong', $mahoidong);
        formData.append('danhgia', $danhgia);
        formData.append('diem', $diem);
        formData.append('ngaynghiemthu', $ngaynghiemthu);
        formData.append('fileBC', $fileBC);
      
        $.ajax({
            url: './php/uploadFileBCGV.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                // Xử lý kết quả trả về từ server
                var path = "php/uploadFile/";
                var embedFileBC = $(`<embed type="application/pdf" src="${path + response}" width="400" height="300"></embed>`);
                $('.showFileBC').append(embedFileBC);
                alert("Luư trữ hoàn tất");
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Xử lý lỗi nếu có
            }
        });
    });

    // Xử lý nút Cập Nhật trong phần nghiệm thu đề tài Giảng Viên
    $('.btn_suaKQNghiemThuGV').click(function() {
        var $madetai = $('.nghiemthu_select_madetaiGV').val();
        var $mahoidong = $('.nghiemthu_select_mahoidong').val();
        var $danhgia = $('.nghiemthu_danhgia').val();
        var $diem = $('.nghiemthu_diem').val();
        var $ngaynghiemthu = $('.nghiemthu_ngaynghiemthu').val();
        var $fileBC = $('.nghiemthu_fileBC')[0].files[0];        

        var formData = new FormData();
        formData.append('madetai', $madetai);
        formData.append('mahoidong', $mahoidong);
        formData.append('danhgia', $danhgia);
        formData.append('diem', $diem);
        formData.append('ngaynghiemthu', $ngaynghiemthu);
        formData.append('fileBC', $fileBC);
      
        $.ajax({
            url: './php/updateNghiemThuDTGV.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                // Xử lý kết quả trả về từ server
                var path = "php/uploadFile/";
                var embedFileBC = $(`<embed type="application/pdf" src="${path + response}" width="400" height="300"></embed>`);
                $('.showFileBC').append(embedFileBC);
                alert("Luư trữ hoàn tất");
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Xử lý lỗi nếu có
            }
        });
    });
    

    // XỬ LÝ PHẦN TÌM KIẾM ĐỀ TÀI 
    $('.keyword').keyup(() => {
        const listGroup = document.querySelector('.list-group');
        let keyword = $('.keyword').val();
        let result = '';
    
        $.ajax({
            url: './php/timKiemDeTai.php',
            type: 'POST',
            dataType: 'json',
            data: {
                keysearch: keyword
            },
            success: function(data) {
                data.forEach(item => {
                    let href = '';
                    if (item.MaDeTaiGV) {
                        href = `chiTietDeTaiGV.php?mdt=${item.MaDeTaiGV}`;
                    } else {
                        href = `chiTietDeTai.php?mdt=${item.MaDeTai}`;
                    }
                    result += `<a href="${href}" class="list-group-item list-group-item-action">${item.TenDeTai}</a>`;
                });
                $('.list-group').html(result);
            }
        });
    
        if (keyword == '') {
            listGroup.classList.add('hide');
        } else {
            listGroup.classList.remove('hide');
        }
    });


    // CHECK BOX chọn options Danh sách đề tài cấp trường
    const checkbox_dsdetai = document.getElementById('cbox_dsdetai');
    const dsdetai_khoa = document.querySelector('.FileDSdetai');
    const dsdetai_truong = document.querySelector('.FileDSdetaiGV');
    
    // Thêm sự kiện change vào checkbox
    checkbox_dsdetai.addEventListener('change', function() {
        if (this.checked) {
            dsdetai_truong.classList.remove('hide');
            dsdetai_khoa.classList.add('hide');
            $.ajax({
                url: './php/danhSachDeTaiGV.php',
                type: 'post',
                dataType: 'json',
                success: function(data){
                    const dsdetai = $('.ds_detainckh');
                    dsdetai.empty();
                    data.forEach(row =>{
                        let status = '';
                        if (row.TrangThai == 0) {
                            status = "Chờ Duyệt";
                        } else if (row.isNGhiemThu == 1) {
                            status = "Xong";
                        } else {
                            status = "Đang...";
                        }
                        let card = `
                            <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                                <div class="card">
                                    <p class="text-title">${status}</p>
                                    <div class="card-details">
                                        <p class="text-body">${row.TenDeTai}</p>
                                    </div>
                                    <button class="card-button" data-mdt="${row.MaDeTaiGV}" onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTaiGV.php?mdt=${row.MaDeTaiGV}'">Xem</button>
                                </div>
                            </div>
                        `;
                        dsdetai.append(card);
                        // dsdetai.innerHTML += card;
                    });
                    
                }
            });
        } else {
            dsdetai_truong.classList.add('hide');
            dsdetai_khoa.classList.remove('hide');
            $.ajax({
                url: './php/danhSachDeTai.php',
                type: 'post',
                dataType: 'json',
                success: function(data){
                    const dsdetai = $('.ds_detainckh');
                    dsdetai.empty();
                    data.forEach(row =>{
                        let status = '';
                        if (row.TrangThai == 0) {
                            status = "Chờ Duyệt";
                        } else if (row.isNGhiemThu == 1) {
                            status = "Xong";
                        } else {
                            status = "Đang...";
                        }
                        let card = `
                            <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                                <div class="card">
                                    <p class="text-title">${status}</p>
                                    <div class="card-details">
                                        <p class="text-body">${row.TenDeTai}</p>
                                    </div>
                                    <button class="card-button" data-mdt="${row.MaDeTai}" onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTai.php?mdt=${row.MaDeTai}'">Xem</button>
                                </div>
                            </div>
                        `;
                        dsdetai.append(card);
                        // dsdetai.innerHTML += card;
                    });
                    
                }
            });
        }
    });
    
    // Phần xử lý lọc đề tài theo năm - Sinh Viên
    const select_namDTSV = document.querySelector('.dsdetai_select_nam');
    select_namDTSV.addEventListener('change', function(){
        const select_namVal = this.value;
        $.ajax({
            url: './php/danhSachDeTaiSV_nam.php',
            type: 'post',
            dataType: 'json',
            data: {
                nam : select_namVal
            },
            success: function(data){
                const dsdetai = $('.ds_detainckh');
                dsdetai.empty();
                data.forEach(row =>{
                    let status = '';
                    if (row.TrangThai == 0) {
                        status = "Chờ Duyệt";
                    } else if (row.isNGhiemThu == 1) {
                        status = "Xong";
                    } else {
                        status = "Đang...";
                    }
                    let card = `
                        <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                            <div class="card">
                                <p class="text-title">${status}</p>
                                <div class="card-details">
                                    <p class="text-body">${row.TenDeTai}</p>
                                </div>
                                <button class="card-button" data-mdt="${row.MaDeTai}" onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTai.php?mdt=${row.MaDeTai}'">Xem</button>
                            </div>
                        </div>
                    `;
                    dsdetai.append(card);
                    // dsdetai.innerHTML += card;
                });
            }
        });
    });

    // Phần xử lý lọc đề tài theo năm - Giảng Viên
    const select_namDTGV = document.querySelector('.dsdetai_select_namGV');
    select_namDTGV.addEventListener('change', function(){
        const select_namVal = this.value;
        $.ajax({
            url: './php/danhSachDeTaiGV_nam.php',
            type: 'post',
            dataType: 'json',
            data: {
                nam : select_namVal
            },
            success: function(data){
                const dsdetai = $('.ds_detainckh');
                dsdetai.empty();
                data.forEach(row =>{
                    let status = '';
                    if (row.TrangThai == 0) {
                        status = "Chờ Duyệt";
                    } else if (row.isNGhiemThu == 1) {
                        status = "Xong";
                    } else {
                        status = "Đang...";
                    }
                    let card = `
                        <div class="col-lg-3 col-12 mb-4 mb-lg-0 custom_card"> 
                            <div class="card">
                                <p class="text-title">${status}</p>
                                <div class="card-details">
                                    <p class="text-body">${row.TenDeTai}</p>
                                </div>
                                <button class="card-button" data-mdt="${row.MaDeTaiGV}" onclick="window.location.href = '/DoAnNCKHv3/chiTietDeTaiGV.php?mdt=${row.MaDeTaiGV}'">Xem</button>
                            </div>
                        </div>
                    `;
                    dsdetai.append(card);
                    // dsdetai.innerHTML += card;
                });
            }
        });
    });

    // Xuất file Excel danh sách các đề tài cấp KHOA theo năm
    const btn_xuatExcelSV = document.querySelector('.btn_FileDSdetai');
    btn_xuatExcelSV.addEventListener('click', function(){
        const nam_val = $('.dsdetai_select_nam').val();
        // console.log(nam_val);
        $.ajax({
            url: './php/xuatExcel_DSDeTaiSV.php',
            type: 'post',
            dataType: 'text',
            data: {
                nam : nam_val
            },
            success: function(data, status, xhr) {
                if (xhr.status === 200) {
                    alert('File Excel đã được tạo thành công!');
                } else {
                    alert(data);
                }
            },
            error: function(xhr, status, error) {
                alert('Lỗi: ' + error);
            }
        });
    })


    // Xuất file Excel danh sách các đề tài cấp trường theo năm
    const btn_xuatExcelGV = document.querySelector('.btn_FileDSdetaiGV');
    btn_xuatExcelGV.addEventListener('click', function(){
        const nam_val = $('.dsdetai_select_namGV').val();
        // console.log(nam_val);
        $.ajax({
            url: './php/xuatExcel_DSDeTaiGV.php',
            type: 'post',
            dataType: 'text',
            data: {
                nam : nam_val
            },
            success: function(data, status, xhr) {
                console.log(data);
                if (xhr.status === 200) {
                    alert('File Excel đã được tạo thành công!');
                } else {
                    alert(data);
                }
            },
            error: function(xhr, status, error) {
                alert('Lỗi: ' + error);
            }
        });
    })


    //  PHẦN XỬ LÝ JS TRANG CỦA GIẢNG VIÊN
    $('.btn_gv_timMaHoiDong').click(function(){
        var mahoidong = $('.select_gv_mahoidong').val();
        console.log(mahoidong);
        $.ajax({
            url: './php/gv_timDSHoiDong.php',
            type: 'post',
            dataType: 'json',
            data: {
                mahoidong : mahoidong
            },
            success: function(data){
                const tbody = document.querySelector('#gv_hoiDongCuaToi');
                data.forEach(row => {
                    var tr = document.createElement('tr');
                    tbody.appendChild(tr);
                    for (var key in row) {
                        var td = document.createElement('td');
                        td.textContent = row[key];
                        tr.appendChild(td);
                    }
                });
            }
        });
    })


    // click nút xem chi tiết đề tài đã cố vấn
    const btnChiTietDeTai = document.querySelectorAll('.btn_gv_chiTietDeTai');
    btnChiTietDeTai.forEach(btn => {
        btn.addEventListener('click', (event) => {
            event.preventDefault();
            const maDeTai = btn.dataset.madetai;
            console.log(maDeTai);
            window.location.href = `/DoAnNCKHv3/chiTietDeTai.php?mdt=${maDeTai}`;
        });
    });

 
});
