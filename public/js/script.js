$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#JudulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#JudulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost:8080/mahasiswa/update');


        const nim = $(this).data('nim');


        // nim, nama,prodi,email_akademik,angkatan

        $.ajax({
            url: 'http://localhost:8080/mahasiswa/getUbah',
            data: { nim: nim },
            method: 'post',
            // dataType: 'JSON',
            success: function (data) {
                data = data.replace(/<br>/g, '');
                console.log(data);
                data = JSON.parse(data);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email_akademik);
                $('#prodi').val(data.prodi);
                $('#angkatan').val(data.angkatan);
            }
        });

    });
});
