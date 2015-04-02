<style>


div
{
    text-align:center;
}

.example_div
{

    float:left; /* need this for the home work */
    color:#FFFFFF;
    font-family:Arial;
    font-weight:bold;
    height:200px;
    width:200px;

    padding:10px;
    margin:5px;

    border-radius: 25px;/* need this for the home work */

    /* http://www.colorzilla.com/gradient-editor/ */

    background: #9b9b9b; /* Old browsers */
    background: -moz-linear-gradient(top,  #9b9b9b 0%, #f9a7a8 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#9b9b9b), color-stop(100%,#f9a7a8)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #9b9b9b 0%,#f9a7a8 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #9b9b9b 0%,#f9a7a8 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #9b9b9b 0%,#f9a7a8 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #9b9b9b 0%,#f9a7a8 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9b9b9b', endColorstr='#f9a7a8',GradientType=0 ); /* IE6-9 */


    border:5px solid green;


}

#wrapper
{
    width:500px;
    background-color:#666666;
    overflow:hidden; /* display fix */
}

</style>


<div id='wrapper'>

    <div class='example_div'>First</div>
    <div class='example_div'>Second</div>


    <div class='example_div'>Third</div>
    <div class='example_div'>Fourth</div>

    <div>Five</div>

</div>


