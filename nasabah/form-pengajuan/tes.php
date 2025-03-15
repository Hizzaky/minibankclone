<div class="sigPad">
    <p class="drawItDesc">Parent/Guardian's Signature</p>
    <ul class="sigNav">
        <li class="drawIt"><a href="#draw-it" >Sign Below</a></li>
        <li class="clearButton"><a href="#clear">Clear</a></li>
    </ul>
    <div class="sig sigWrapper">
    <div class="typed"></div>
    <canvas class="pad" width="498" height="150"></canvas>
    <input type="hidden" name="output" class="output">
    </div>
    </div>
    
<div class="sigPad">
    <p class="drawItDesc">First Signature</p>
    <ul class="sigNav">
        <li class="drawIt"><a href="#draw-it" >Sign Below</a></li>
        <li class="clearButton"><a href="#clear">Clear</a></li>
    </ul>
    <div class="sig sigWrapper">
    <div class="typed"></div>
    <canvas class="pad" width="498" height="150"></canvas>
    <input type="hidden" name="output" class="output">
    </div>

<div class="sigPad">
<p class="drawItDesc">Second Signature</p>
  <ul class="sigNav">
    <li class="drawIt"><a href="#draw-it" >Sign Below</a></li>
    <li class="clearButton"><a href="#clear">Clear</a></li>
  </ul>
  <div class="sig sigWrapper">
    <div class="typed"></div>
    <canvas class="pad" width="498" height="150"></canvas>
    <input type="hidden" name="output2" class="output">
  </div>

  <script>
    $(document).ready(function () {
      $('.sigPad').signaturePad({drawOnly : true});
    });
  </script>