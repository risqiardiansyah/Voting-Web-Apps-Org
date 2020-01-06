    <script>
    $(document).ready(function(){
    window.pilih_calon = function(id){
    $('#button-pilih').addClass('disabled');
        $.ajax({
        url : '<?= base_url() ?>home/pilih_calon',
        type : 'post',
        data : {id_calon : id},
        success : function(response){
            if (response == 1) {
                Swal.fire({
                    type: 'success',
                    title: 'Terima Kasih telah memilih',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function(){
                    location.href = 'http://192.168.43.238/reor_pks/';
                });
                }else if (response == 2) {
                Swal.fire(
                    'Oops!',
                    'user gagal dihapus',
                    'error'
                )
                }
        }
        });
    }


    });
    </script>
</body>
</html>