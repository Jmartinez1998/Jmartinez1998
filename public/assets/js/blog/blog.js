$(function(){
  var objectManager = {
    __init: function(){
      objectManager.convertTime();
      objectManager.setRefToPagination();
      objectManager.setText();
    },
    convertTime: function(){
      var horas = $('.date-time');
      $.each(horas,function(i,object){
        var horaSinFormato = $(object).text();
        // console.log(horaSinFormato);
        var horaConFormato = moment(horaSinFormato,"YYYYMMDD , h:mm:ss a").fromNow();
           $(object).text(' '+horaConFormato);
      });
    },
    setRefToPagination(){
      $pagination = $(".pagination-blog");
      $.each($pagination,function(i,obj){
        var ref = $(obj).data("ref");
        $(obj).find("a").each(function(ind,a){
          $(a).attr("href",$(a).attr("href")+ref);
        });
      });
    },
    cutText: function(text){
       return (text.length<100) ? text : text.substr(0,100) +"...";
    },
    setText: function(){
      $(".card-text").each(function(index,h4){
        var text = $(h4).text();
        $(h4).text(objectManager.cutText(text));
      });

    }
  }
  objectManager.__init();
});
