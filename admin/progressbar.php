<div class="progress" style="margin-top:100px">
    <div class="progress-bar active" id="progressbar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
        <span class="sr-only">0% Complete</span>
    </div>
</div>
<!-- the code -->
<script> 
    $(document).ready(function(){
        var $progressbar = $("#progressbar");
        $progressbar.show();
        $('#uploadForm').on('submit', function(e){
            e.preventDefault();
            $(function(){
                $progressbar.css('width', '30%');
            }); 
            $.ajax({
                url: "insertdata.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(data){
                    console.log(data);
                    if (data == 'T'){
                        $('#txtname').val("");
                        $('#txtsex').val("");
                        $('#txtage').val("");
                        $('#txterr').val('Record Inserted');
                        $progressbar.css('width', '100%');
                    }
                },
                error: function(data){
                alert("Something went wrong !");
            }
        });
    });
});
</script>
