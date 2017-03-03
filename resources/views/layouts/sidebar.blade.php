<div class="w3-half w3-container">
      <div class="w3-sand w3-grayscale">
        <header class="w3-padding-48 w3-center"><h5 class="w3-tag">Archives</h5></header>
        <ul>
        @foreach ($archives as $stats)
          <li><a href="/?month={{ $stats['month']}}&year={{$stats['year']}}">
            {{ $stats['month'] .' '. $stats['year'] }} 
            </a></li>
          @endforeach
        </ul>
      </div>
</div>
</div>
