<!DOCTYPE html>
<html>

<body>


<table>
    <tr>
        <td>
            <canvas id="et" width="50" height="50" style="border:1px solid #000000;">
            Your browser does not support the HTML5 canvas tag.
            </canvas>
        </td>
        <td>
            <canvas id="to" width="50" height="50" style="border:1px solid #000000;">
            Your browser does not support the HTML5 canvas tag.
            </canvas>
        </td>
        <td>
            <canvas id="tre" width="50" height="50" style="border:1px solid #000000;">
            Your browser does not support the HTML5 canvas tag.
            </canvas>
        </td>
        <td>
            <canvas id="fire" width="50" height="50" style="border:1px solid #000000;">
            Your browser does not support the HTML5 canvas tag.
            </canvas>
        </td>
        <td>
            <canvas id="fem" width="50" height="50" style="border:1px solid #000000;">
            Your browser does not support the HTML5 canvas tag.
            </canvas>
        </td>
        <td>
            <canvas id="seks" width="50" height="50" style="border:1px solid #000000;">
            Your browser does not support the HTML5 canvas tag.
            </canvas>
        </td>
    </tr>
</table>


<script type="text/javascript">
var size = 50;
var dot = 5;
var start = 0;
var end = 2*Math.PI;

function cloneCanvas(oldCanvas) {

    //create a new canvas
    var newCanvas = document.createElement('canvas');
    var context = newCanvas.getContext('2d');

    //set dimensions
    newCanvas.width = oldCanvas.width;
    newCanvas.height = oldCanvas.height;

    //apply the old canvas to the new one
    context.drawImage(oldCanvas, 0, 0);

    //return the new canvas
    return newCanvas;
}

</script>


<!-- Første terning -->
<script type="text/javascript">
var canv1=document.getElementById("et");

var ctx1=canv1.getContext("2d");
ctx1.fillStyle="green";
ctx1.fillRect(0,0,size,size);

var tern1prik=canv1.getContext("2d");
tern1prik.beginPath();
tern1prik.arc(size/2,size/2,dot, start, end);
tern1prik.fillStyle="yellow";
tern1prik.fill();
</script>

<!-- Anden terning -->
<script type="text/javascript">
var canv2=document.getElementById("to");

var ctx2=canv2.getContext("2d");
ctx2.fillStyle="green";
ctx2.fillRect(0, 0, size, size);

var tern2prik1=canv2.getContext("2d");
tern2prik1.beginPath();
tern2prik1.arc(size/5,(size/5)*4,dot, start, end);
tern2prik1.fillStyle="yellow";
tern2prik1.fill();

var tern2prik2=canv2.getContext("2d");
tern2prik2.beginPath();
tern2prik2.arc((size/5)*4, size/5, dot, start, end);
tern2prik2.fillStyle="yellow";
tern2prik2.fill();
</script>

<!-- Tredje terning -->
<script type="text/javascript">
var canv3=document.getElementById("tre");

var ctx3=canv3.getContext("2d");
ctx3.fillStyle="green";
ctx3.fillRect(0, 0, 50, 50);

var tern3prik1=canv3.getContext("2d");
tern3prik1.beginPath();
tern3prik1.arc(size/5, (size/5)*4, dot, start, end);
tern3prik1.fillStyle="yellow";
tern3prik1.fill();

var tern3prik2=canv3.getContext("2d");
tern3prik2.beginPath();
tern3prik2.arc(size/2, size/2, dot, start, end);
tern3prik2.fillStyle="yellow";
tern3prik2.fill();

var tern3prik3=canv3.getContext("2d");
tern3prik3.beginPath();
tern3prik3.arc((size/5)*4, size/5, dot, start, end);
tern3prik3.fillStyle="yellow";
tern3prik3.fill();
</script>

<!-- Fjerde terning -->
<script type="text/javascript">
var canv4=document.getElementById("fire");

var ctx4=canv4.getContext("2d");
ctx4.fillStyle="green";
ctx4.fillRect(0, 0, size, size);

var tern4prik1=canv4.getContext("2d");
tern4prik1.beginPath();
tern4prik1.arc(size/5, size/5, dot, start, end);
tern4prik1.fillStyle="yellow";
tern4prik1.fill();

var tern4prik2=canv4.getContext("2d");
tern4prik2.beginPath();
tern4prik2.arc(size/5, (size/5)*4, dot, start, end);
tern4prik2.fillStyle="yellow";
tern4prik2.fill();

var tern4prik3=canv4.getContext("2d");
tern4prik3.beginPath();
tern4prik3.arc((size/5)*4, size/5, dot, start, end);
tern4prik3.fillStyle="yellow";
tern4prik3.fill();

var tern4prik4=canv4.getContext("2d");
tern4prik4.beginPath();
tern4prik4.arc((size/5)*4, (size/5)*4, dot, start, end);
tern4prik4.fillStyle="yellow";
tern4prik4.fill();
</script>

<!-- Femte terning -->
<script type="text/javascript">
var canv5=document.getElementById("fem");

var ctx5=canv5.getContext("2d");
ctx5.fillStyle="green";
ctx5.fillRect(0, 0, size, size);

var tern5prik1=canv5.getContext("2d");
tern5prik1.beginPath();
tern5prik1.arc(size/5, size/5, dot, start, end);
tern5prik1.fillStyle="yellow";
tern5prik1.fill();

var tern5prik2=canv5.getContext("2d");
tern5prik2.beginPath();
tern5prik2.arc(size/5, (size/5)*4, dot, start, end);
tern5prik2.fillStyle="yellow";
tern5prik2.fill();

var tern5prik3=canv5.getContext("2d");
tern5prik3.beginPath();
tern5prik3.arc(size/2, size/2, dot, start, end);
tern5prik3.fillStyle="yellow";
tern5prik3.fill();

var tern5prik4=canv5.getContext("2d");
tern5prik4.beginPath();
tern5prik4.arc((size/5)*4, size/5, dot, start, end);
tern5prik4.fillStyle="yellow";
tern5prik4.fill();

var tern5prik5=canv5.getContext("2d");
tern5prik5.beginPath();
tern5prik5.arc((size/5)*4, (size/5)*4, dot, start, end);
tern5prik5.fillStyle="yellow";
tern5prik5.fill();
</script>

<!-- Sjette terning -->
<script type="text/javascript">
var canv6=document.getElementById("seks");

var ctx6=canv6.getContext("2d");
ctx6.fillStyle="green";
ctx6.fillRect(0, 0, size, size);

var tern6prik1=canv6.getContext("2d");
tern6prik1.beginPath();
tern6prik1.arc(size/5, size/5, dot, start, end);
tern6prik1.fillStyle="yellow";
tern6prik1.fill();

var tern6prik2=canv6.getContext("2d");
tern6prik2.beginPath();
tern6prik2.arc(size/2, size/5, dot, start, end);
tern6prik2.fillStyle="yellow";
tern6prik2.fill();

var tern6prik3=canv6.getContext("2d");
tern6prik3.beginPath();
tern6prik3.arc(size/5, (size/5)*4, dot, start, end);
tern6prik3.fillStyle="yellow";
tern6prik3.fill();

var tern6prik4=canv6.getContext("2d");
tern6prik4.beginPath();
tern6prik4.arc((size/5)*4, size/5, dot, start, end);
tern6prik4.fillStyle="yellow";
tern6prik4.fill();

var tern6prik5=canv6.getContext("2d");
tern6prik5.beginPath();
tern6prik5.arc(size/2, (size/5)*4, dot, start, end);
tern6prik5.fillStyle="yellow";
tern6prik5.fill();

var tern6prik6=canv6.getContext("2d");
tern6prik6.beginPath();
tern6prik6.arc((size/5)*4, (size/5)*4, dot, start, end);
tern6prik6.fillStyle="yellow";
tern6prik6.fill();
</script>

</body>
</html>