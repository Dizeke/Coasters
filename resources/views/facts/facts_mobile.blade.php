<div class="row hide-on-med-and-up">

  <div class="clearfix"><br></div>

  <div class="col s12 m3 center-align">
    <!-- Great Customer Interaction -->
    <div class="col s12 btnGCI-holder" style="padding-top: 16px; padding-bottom: 16px;">
      <a href="#" class="btnGCI green-text text-darken-2">
        <h5><b>Great Customer Interaction</b></h5>
      </a>
    </div>

    <!-- Attention Grabbing -->
    <div class="col s12 btnAG-holder" style="padding-top: 16px; padding-bottom: 16px;">
      <a href="#" class="btnAG blue-text text-darken-2">
        <h5><b>Attention Grabbing</b></h5>
      </a>
    </div>

    <!-- Highly Influential -->
    <div class="col s12 btnHI-holder" style="padding-top: 16px; padding-bottom: 16px;">
      <a href="#" class="btnHI amber-text text-darken-4">
        <h5><b>Highly Influential</b></h5>
      </a>
    </div>

    <!-- Much More Personal -->
    <div class="col s12 btnMMP-holder" style="padding-top: 16px; padding-bottom: 16px;">
      <a href="#" class="btnMMP red-text text-darken-2">
        <h5><b>Much More Personal</b></h5>
      </a>
    </div>
  </div>

  <div class="col s12 m9  hide-on-med-and-up" style="padding-top: 32px;">
      <!-- Great Customer Interaction -->
      <div class="divGCI divFacts">
        @include('facts.facts_gci_mobile')
      </div>

      <!-- Attention Grabbing -->
      <div class="divAG divFacts" style="display: none;">
        @include('facts.facts_ag_mobile')
      </div>
      <!-- Highly Influential -->
      <div class="divHI divFacts" style="display: none;">
        @include('facts.facts_hi_mobile')
      </div>

      <!-- Much More Personal -->
      <div class="divFacts divMMP" style="display: none;">
        @include('facts.facts_mmp_mobile')
      </div>
  </div>

</div>
