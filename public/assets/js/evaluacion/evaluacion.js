
var Pregunta = function(){
  this.addOption = function(selector, callback){
    var pos = $('table.table-options tbody').children().length + 1;
    var tr = $('<tr>').addClass(pos);
    var preName = 'opciones['+pos+']';
    
    var iValue    = $('<input>').attr('type', 'hidden').attr('name', preName+'[valor]').addClass('option-valor').val(pos);
    var tdInfo    = $('<td>').addClass('option-text').text(pos);
    var tdOption  = $('<td>').append($('<input>').attr('type', 'text').attr('name', preName+'[opcion]').addClass('form-control option-option'));
    var tdRadio   = $('<td>').append($('<input>').attr('type', 'radio').attr('name', 'opciones[es_correcta]').addClass('radio-inline option-correct').val(pos));
    var tdOptions = $('<td>').append($('<button>').attr('type', 'button').addClass('btn btn-warning btn-xs delete-option').text('Eliminar'));
    
    tr.append(iValue);        
    tr.append(tdInfo);
    tr.append(tdOption);
    tr.append(tdRadio);
    tr.append(tdOptions);

    $(selector).append(tr);
    callback();
  }
  this.deleteOption = function(object, selector, callback){
    var parent = object.parents(selector);
    parent.detach();
    callback();
  }
  this.renameAllOptions = function(selector, callback){
    $.each($(selector), function(index, tr){
      var pos     = index +1;
      var preName = 'opciones['+pos+']';
      $(this).find('input.option-valor').attr('name', preName+'[valor]').val(pos);;
      $(this).find('input.option-option').attr('name', preName+'[opcion]');
      $(this).find('input.option-correct').val(pos);
      $(this).find('td.option-text').text(pos);
      $(this).find('input.option-id').attr('name', preName+'[id]');
      console.log(tr);
    });
    callback();
  }

}

var Evaluacion = function(){
  this.pregunta = new Pregunta();
}
