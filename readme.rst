###################
Code Igniter with Blade template
###################

Since working with laravel for a while make me fall in love with blade

here is working copy of using blade in CI,

just run composer first to install Illuminate View packages
andddd you good to go


for use in Controller
make new Controller and Extend Controller (Not CIController)

and to viw use blade just call this 
$this->blade->view()->make(viewfiles)->render();

you can use blade syntax too
{{}}
@if
@elseif
@else and etc

