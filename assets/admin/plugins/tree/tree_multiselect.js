$( document ).ready(function() {
    $("li.parent-list ul").hide(); //hide the child lists
    $("li.parent-list i").click(function () {
		
		if ($(this).hasClass("fa-arrow-down")) {
  		$(this).removeClass('fa-arrow-down');
		$(this).addClass('fa-arrow-up');
		}
		else
		{
  		$(this).removeClass('fa-arrow-up');
		$(this).addClass('fa-arrow-down');
		}
		
        $(this).next("ul").toggle(); // toggle the visibility of the child list on click
    });

<!--MODAL MULTISELECT FUNCTIONALITY -->

// check-uncheck all
    $(document).on('change', 'input[id="all"]', function () { 
        $('.canine').prop("checked", this.checked);
    });

// parent/child check-uncheck all
    $(function () {
        $('.parent').on('click', function () {
            $(this).closest('ul li').find(':checkbox').prop('checked', this.checked);
        });
    });
});