$(function() {
    var names = [];
    var filesdata = [];
   
    $('body').on('change', '.picupload', function(event) {
        var getAttr = $(this).attr('click-type');
        var files = event.target.files;
        var output = document.getElementById("media-list");
        var z = 0



        if (getAttr == 'type1') {

            $('#media-list').html('');
            $('#media-list').html('<li class="myupload"><span><i class="fa fa-plus text-theme font-20" aria-hidden="true"></i><input type="file" click-type="type2" id="picupload" class="picupload" multiple></span></li>');
            $('#hint_brand').modal('show');

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                names.push($(this).get(0).files[i].name);
                filesdata.push($(this).get(0).files[i]);
                if (file.type.match('image')) {
                    var picReader = new FileReader();
                    picReader.fileName = file.name;

                      //  var form_data = new FormData();                  
                        //form_data.append('file', file);

                    picReader.addEventListener("load", function(event) {
                        var picFile = event.target;

                        var div = document.createElement("li");


                        div.innerHTML = "<img src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/><div  class='post-thumb'><div class='inner-post-thumb'><a href='javascript:void(0);' data-id='" +event.target.fileName + "' class='remove-pic'><i class='fa fa-times' aria-hidden='true'></i></a><div></div>";

                        $("#media-list").prepend(div);


                    });
                } else {

                    var picReader = new FileReader();
                    picReader.fileName = file.name;
                    
                    picReader.addEventListener("load", function(event) {

                        var picFile = event.target;

                        var div = document.createElement("li");

                        div.innerHTML = "<video src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'></video><div id='" + z + "'  class='post-thumb'><div  class='inner-post-thumb'><a data-id='" + event.target.fileName + "'  href='javascript:void(0);' class='remove-pic'><i class='fa fa-times' aria-hidden='true'></i></a><div></div>";
                        $("#media-list").prepend(div);

                    });

                }
               
                var fileobj ;
                    $.each(filesdata,function(i,v){
                        fileobj = v;
                        //fileobj[i] = rand+v["name"];
                        ajax_file_upload(fileobj);
                          
                       }) 
                      console.log(names,   filesdata);
                picReader.readAsDataURL(file);
                //console.log(names,   filesdata);
            }
           
           

        } else if (getAttr == 'type2') {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                names.push($(this).get(0).files[i].name);
                   filesdata.push($(this).get(0).files[i]);
                if (file.type.match('image')) {

                    var picReader = new FileReader();
                    picReader.fileName = file.name
                    picReader.addEventListener("load", function(event) {

                        var picFile = event.target;

                        var div = document.createElement("li");

                        div.innerHTML = "<img src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'/><div  class='post-thumb'><div class='inner-post-thumb'><a href='javascript:void(0);' data-id='" + event.target.fileName + "'  class='remove-pic'><i class='fa fa-times' aria-hidden='true'></i></a><div></div>";

                        $("#media-list").prepend(div);

                    });
                } else {
                    var picReader = new FileReader();
                    picReader.fileName = file.name
                    picReader.addEventListener("load", function(event) {

                        var picFile = event.target;

                        var div = document.createElement("li");

                        div.innerHTML = "<video src='" + picFile.result + "'" +
                            "title='" + picFile.name + "'></video><div class='post-thumb'><div  class='inner-post-thumb'><a href='javascript:void(0);' data-id='" + event.target.fileName + "' class='remove-pic'><i class='fa fa-times' aria-hidden='true'></i></a><div></div>";

                        $("#media-list").prepend(div);

                    });
                }
                 var fileobj;
                    $.each(filesdata,function(i,v){
                         fileobj = v;
                            //fileobj["vname"] = rand+v["name"];
                            //console.log('sfds',fileobj);

                         ajax_file_upload(fileobj);
                          
                       }) 
                picReader.readAsDataURL(file);

            }
           
 
            // return array of file name
            // console.log(names,filesdata); 
         
        }


        var arr = [];
        function ajax_file_upload(fileobj){

          var form_data = new FormData();  
 
            form_data.append('file', fileobj);
            
          
            var url = "home/add_image_newsfeed/";
            // form_data.filename = rand+file.name; 
             $.ajax({
                    type: 'POST',
                    url: url,
                    data: form_data,
                    enctype: 'multipart/form-data',
                    processData: false,
                    contentType: false,
                    cache: false,
                        
                    success:function(response) {
                  if(response){
                        arr.push(response);
                        var  upimg = $("input#imagefile1").val(arr);
                        console.log('data',upimg);
                        }
                    }
                  });
         }

    });

    $('body').on('click', '.remove-pic', function() {
        $(this).parent().parent().parent().remove();
        var removeItem = $(this).attr('data-id');
        var yet = names.indexOf(removeItem);

        if (yet != -1) {
            names.splice(yet, 1);
        }
        // return array of file name
        console.log(names);
    });
    $('#hint_brand').on('hidden.bs.modal', function(e) {
        names = [];
        z = 0;
    });


    
});