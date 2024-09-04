@extends('dashboard.layout.master')
@section('maincontent')

    <form action="{{route('savepricing')}}" method="post">
            @csrf

        <div class="field_wrapper">
            <div>
                <input type="text" name="field_name[]" value=""/>
                <a href="javascript:void(0);" class="add_button" title="Add field"><img src="images/add-icon.png"/></a>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save </button>

    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field_wrapper'); //Input field wrapper
            var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="images/remove-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            
            // Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){ 
                    x++; //Increase field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }else{
                    alert('A maximum of '+maxField+' fields are allowed to be added. ');
                }
            });
            
            // Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrease field counter
            });
        });
        </script>


@endsection