$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id,url){
    if(confirm('Xóa vĩnh viễn. Bạn có chắc không?')){
        $.ajax({
            type: 'DELETE',
            datatype: 'JSON',
            data:{id:id},
                
            url: url,
            success: function(result){
                if(result.error === false){
                    alert(result.message);
                    location.reload();
                } else{
                    alert('Xin vui lòng thử lại');
                }
        },
        error: function(xhr, status, error){
            console.error(xhr.responseText); // In lỗi ra console để kiểm tra
            alert('Đã có lỗi xảy ra, vui lòng thử lại sau.');
        }
    });
    }
}