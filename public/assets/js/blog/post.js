$(function(){
  var managerPost = {
    comments: [],
    changeCountComments : function(){
      $(".countComments").text(managerPost.comments.length);
    },
    getData: function(){
      return {
        message:  $("#message").val(),
        username: $("#username").val(),
        email:    $("#email").val(),
        id:       $("#btnSendComment").data("post")
      };
    },
    getComments: function(){
      $.ajax({
        url: "/getComments",
        method:"POST",
        data:{id:$("#btnSendComment").data("post")}
      }).done(function(response){
        console.log(response);
        managerPost.comments = response.comments;
        managerPost.fillContentWithComments();
      }).fail(function(error){
        console.error(error);
      })
    },
    sendMessage : function(data,callback){
      $.ajax({
        url : "/saveComment",
        method: "POST",
        data: data
      }).done(callback).fail(function(error){
        console.error(error);
      });
    },
    fillContentWithComments(){
      managerPost.changeCountComments();
      var htmlComments = managerPost.comments.map(function(comment){
        var horaSinFormato = comment.created_at;
        var horaConFormato = moment(horaSinFormato,"YYYYMMDD , h:mm:ss a").fromNow();
        return componentes.comment({text:comment.comentario,date:horaConFormato,username:comment.nombre,src:"/assets/images/system/user1.png"});
      });
      document.getElementById("content-comments").innerHTML = htmlComments.join('');
    }
  };
  managerPost.getComments();
  $("#frm-comment").submit(function(event){
    event.preventDefault();
    var data = managerPost.getData();
    managerPost.sendMessage(data,function(response){
      console.log(response);
      if(response.status == 200){
        managerPost.comments.push(response.data);
        managerPost.fillContentWithComments();
        document.getElementById("frm-comment").reset();
        toastr.success("Comentario realizado");
        $('body,html').animate({scrollTop:( parseInt( $("body").height() ) - ( parseInt( $("#footer").height()*4 ) ) ) },2000);
      }else{
        toastr.info("Favor de llenar todos los campos");
      }
    });
  });

});
