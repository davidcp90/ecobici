var evaluacion = new Evaluacion();

$(document).ready(function(){
  $('button.add-option').on('click', function(){
    evaluacion.pregunta.addOption('table.table-options tbody', function(){
      console.log('addOption');
    });
  });
  $('table.table-options tbody').on('click', 'button.delete-option',function(){
    evaluacion.pregunta.deleteOption($(this), 'table.table-options tbody tr', function(){
      evaluacion.pregunta.renameAllOptions('table.table-options tbody tr', function(){
        console.log('deleteOption');
      });
    });
  });
});