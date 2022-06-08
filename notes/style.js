const textTask = document.querySelectorAll('.textTask')
const draggables = document.querySelectorAll('.draggable')

draggables.forEach(draggable => {
    draggable.addEventListener('dragstart', () => {
      draggable.classList.add('dragging')
    })
  
    draggable.addEventListener('dragend', () => {
      draggable.classList.remove('dragging')
    })
  })
  
  function getDragAfterElement(textTask, y) {
    const draggableElements = [...textTask.querySelectorAll('.draggable:not(.dragging)')]
  
    return draggableElements.reduce((closest, child) => {
      const box = child.getBoundingClientRect()
      const offset = y - box.top - box.height / 2
      if (offset < 0 && offset > closest.offset) {
        return { offset: offset, element: child }
      } else {
        return closest
      }
    }, { offset: Number.NEGATIVE_INFINITY }).element
  }

$("button.class").on('click', function(){
    var text = $('input.name').val();
  
    console.log(text);
    $.ajax({
      method: 'POST',
      url: 'php/add.php',
      data: {
        text : text
      },
      success: function (data) {
        $('#results').html(data);
       },
    });
  })

  function reload_interval(time){
	setTimeout(function(){
		location.reload();
	}, time);
} 

