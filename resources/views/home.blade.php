@extends('layouts.app')

@section('content')
<!-- Navigation -->
<div>
  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-sm-4 rounded" src="img/gambar.png" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Do You Know About K-pop? </span>
            <span class="section-heading-lower">K-POP or Korean POP</span>
          </h2>
          <p class="mb-3"> jenis musik populer yang berasal dari Korea Selatan . 
              Banyak artis dan kelompok musik pop Korea sudah menembus batas dalam negeri dan populer di mancanegara.
               Kegandrungan akan musik K-Pop merupakan bagian yang tak terpisahkan dari Demam Korea (Korean Wave) di berbagai negara.
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="kpop">Visit Us Today!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Don't Forget</span>
              <span class="section-heading-lower">To Buy Here !!!</span>
            </h2>
            <p class="mb-0">We provide various albums for your favorite idols. Immediately Check on our Store !</p>
            <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="store">CHECK Store!</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

</body>

</html>

@endsection
