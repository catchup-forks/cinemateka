<nav>
  <div class="nav-wrapper">
    <a v-link="{ path: '/' }" class="brand-logo left">
      <svg version="1.1" fill="#FFFFFF" x="0px" y="0px" viewBox="635.2 39.8 147 47.9" enable-background="new 635.2 39.8 147 47.9">
      <path d="M782.2,39.8h-147v3.6l0,0V61l2,0.3v-7.2h0.2c0.9,0.1,1.3,0.9,1.9,2.8l1.4,5l2.4,0.4l-1.8-6.1
        c-0.6-1.9-1.3-3.2-2-3.5c0.5-0.1,0.9-0.8,1.1-1.4l0.6-1.8c0.4-1.2,0.7-1.4,1.1-1.3l0.5,0.1l0.1-3.5l4.9,0.9v17.5l2.2,0.4l3.8-11.3
        v12l2,0.3V46.9l5,0.9v17.5l2,0.3v-7.2l3.7,0.6v7.2l2,0.3V49.2l7.3,1.3c-1.7,1-2.7,4-2.7,8.1c0,5.3,1.6,9.4,4.4,9.9
        c2.8,0.5,4.4-3.1,4.4-8.4c0-4.1-0.9-7.5-2.6-9l14,2.4v17.3l3.9,0.7c2.1,0.4,3.5-0.8,3.5-4.5c0-2.1-0.7-3.7-1.8-4.4
        c1-0.5,1.5-1.9,1.5-3.6c0-2.3-0.7-3.8-1.8-4.6l13.5,2.4V74l2,0.3V60.2l4.1,0.7v-3.1l6.3,1.1c-1.5,1.2-2.4,4.1-2.4,7.9
        c0,5.3,1.6,9.4,4.4,9.9c2.8,0.5,4.4-3.1,4.4-8.4c0-3.8-0.8-7-2.3-8.7l6.9,1.2v17.1l2,0.3v-5.6l1.6,0.3c2.3,0.4,3.6-1.9,3.6-5.5
        c0-2.9-0.8-4.7-2-5.7l8.5,1.5c-1.4,1.2-2.2,4.1-2.2,7.8c0,5.3,1.6,9.4,4.4,9.9c2.8,0.5,4.4-3.1,4.4-8.4c0-3.7-0.8-6.8-2.2-8.6l8,1.4
        v4.5c0,4,0,9-1.5,8.8l-0.5-0.1v7.7l2,0.3v-4.1l5.6,0.9v4.1l2,0.3V80l-1.1-0.2V66.5l5.6,1v16.9l6.8,1.2v-3.5l-4.8-0.8v-3.7l4,0.7
        v-3.5l-4-0.7v-3.3l4.8,0.8v-6.4l-124-21.8h126L782.2,39.8L782.2,39.8z M679.5,59.7c0,3.6-0.9,5.6-2.3,5.4c-1.4-0.2-2.3-2.5-2.3-6.1
        s0.9-5.6,2.3-5.4C678.6,53.8,679.5,56.1,679.5,59.7z M696.3,56.8c0.9,0.2,1.6,0.7,1.6,2.1s-0.5,2.1-1.4,2l-1.5-0.3v-4L696.3,56.8z
         M696.7,68.4l-1.8-0.3v-4.4l1.6,0.3c1.1,0.2,1.7,1,1.7,2.7C698.2,68,697.7,68.5,696.7,68.4z M726.1,73.3c-1.4-0.2-2.3-2.5-2.3-6.1
        c0-3.6,0.9-5.6,2.3-5.4c1.4,0.2,2.3,2.5,2.3,6.1C728.4,71.6,727.5,73.6,726.1,73.3z M738.5,69.4l-1.4-0.2v-5.1l1.4,0.2
        c1.2,0.2,1.7,1.4,1.7,2.8C740.1,68.3,739.8,69.7,738.5,69.4z M750.8,77.5c-1.4-0.2-2.3-2.5-2.3-6.1s0.9-5.6,2.3-5.4s2.3,2.5,2.3,6.1
        C753.2,75.8,752.3,77.8,750.8,77.5z M761.8,78.9c1.2-0.9,1.1-5.6,1.1-10.1v-0.3l2.6,0.4v10.5L761.8,78.9z M639.7,46.4l-1,3
        c-0.3,0.9-0.5,1.6-1.1,1.5l-0.4-0.1v-7l4.3,0.8C640.9,44.5,640.3,44.8,639.7,46.4z M649.5,57.7V45.9l3.8,0.7L649.5,57.7z
         M666.2,55.5l-3.7-0.6v-6.7l3.7,0.6V55.5z"/>
      </svg>
    </a>
    <ul>
      @foreach ($menuItems as $item)
      <li>
        <a v-link="{ path: '/{{ $item->link }}' }">{{ $item->name }}</a>
      </li>
      @endforeach
    </ul>
    <a href="http://seance.ru" class="brand-logo right" target="_blank">
      <svg version="1.2" baseProfile="tiny" x="0px" y="0px" viewBox="0 0 89 22">
        <g fill="#FFFFFF">
          <path d="M19.1,13.8l-2.8,0c-0.3,1.4-0.8,2.6-1.5,3.4c-0.7,0.9-1.5,1.4-2.3,1.8c-0.8,0.3-1.6,0.5-2.4,0.5
            c-2.5,0-4.3-0.8-5.5-2.4C3.6,15.5,3,13.5,3,10.8c0-1.8,0.3-3.3,0.9-4.5C4.6,5,5.4,4.1,6.5,3.5c1.1-0.6,2.3-0.9,3.6-0.9
            c1.4,0,2.6,0.3,3.7,0.9c1.2,0.6,1.9,1.8,2.3,3.4l2.8,0c0-1.2-0.6-2.4-1.3-3.4c-0.7-1-1.7-1.9-3-2.6C13.3,0.3,11.8,0,10.1,0
            c-1.6,0-3,0.3-4.2,0.8C4.6,1.3,3.6,2,2.7,3c-0.9,1-1.5,2.1-2,3.4C0.2,7.8,0,9.3,0,10.9c0,2,0.3,3.5,0.8,5C1.3,17.3,2,18.5,3,19.4
            c0.9,0.9,1.9,1.5,3.1,2C7.2,21.8,8.4,22,9.7,22c1,0,2.1-0.2,3.4-0.5c1.3-0.3,2.5-1.1,3.7-2.3C18,17.9,18.8,16.1,19.1,13.8
            L19.1,13.8z"/>
          <polygon points="63,10.5 66.1,10.5 66.1,11 63,11 63,10.5   "/>
          <path d="M65.5,8.3c0-0.3-0.1-0.6-0.2-0.8c-0.1-0.2-0.4-0.4-0.7-0.4c-0.4,0-0.6,0.1-0.7,0.4
            c-0.1,0.2-0.2,0.5-0.2,0.8c0,0.3,0.1,0.6,0.2,0.8c0.1,0.2,0.4,0.4,0.7,0.4c0.2,0,0.4-0.1,0.6-0.2c0.1-0.1,0.2-0.3,0.3-0.4
            C65.5,8.6,65.5,8.5,65.5,8.3L65.5,8.3z M62.9,8.3c0-0.6,0.2-1,0.5-1.3c0.3-0.3,0.7-0.4,1.2-0.4c0.5,0,0.8,0.1,1.2,0.4
            c0.3,0.3,0.5,0.7,0.5,1.3c0,0.6-0.1,1-0.5,1.3C65.4,9.8,65,10,64.5,10c-0.4,0-0.8-0.1-1.2-0.4C63.1,9.3,62.9,8.9,62.9,8.3L62.9,8.3
            z"/>
          <path d="M89,13.8l-2.8,0c-0.3,1.4-0.8,2.6-1.5,3.4c-0.7,0.9-1.5,1.4-2.3,1.8c-0.8,0.3-1.6,0.5-2.4,0.5
            c-2.5,0-4.3-0.8-5.5-2.4c-1.1-1.6-1.7-3.6-1.7-6.3c0-1.8,0.3-3.3,0.9-4.5c0.6-1.3,1.5-2.2,2.5-2.8c1.1-0.6,2.3-0.9,3.6-0.9
            c1.4,0,2.6,0.3,3.7,0.9c1.2,0.6,1.9,1.8,2.3,3.4l2.8,0c0-1.2-0.6-2.4-1.3-3.4c-0.7-1-1.7-1.9-3-2.6C83.2,0.3,81.7,0,79.9,0
            c-1.6,0-3,0.3-4.2,0.8C74.5,1.3,73.4,2,72.5,3c-0.9,1-1.5,2.1-2,3.4c-0.5,1.4-0.7,2.8-0.7,4.5c0,2,0.3,3.5,0.8,5
            c0.5,1.4,1.3,2.6,2.2,3.5c0.9,0.9,1.9,1.5,3.1,2c1.1,0.4,2.4,0.6,3.6,0.6c1,0,2.1-0.2,3.4-0.5c1.3-0.3,2.5-1.1,3.7-2.3
            C87.9,17.9,88.6,16.1,89,13.8L89,13.8z"/>
          <path d="M46.1,12.9l-3.2-9.2l0,0l-3.5,9.2L46.1,12.9L46.1,12.9z M52.5,21.4l-3.2,0l-2.1-6.1l-8.6,0l-2.3,6.1l-2.9,0
            l-0.1,0l-14,0l0-20.9l15.7,0l0,2.5l-12.8,0l0,6.4l11.8,0l0,2.5l-11.8,0l0,6.9l12,0l7.1-18.4l3.3,0L52.5,21.4L52.5,21.4z"/>
          <polygon points="66.6,0.6 69.5,0.6 69.5,21.4 66.6,21.4 66.6,0.6  "/>
          <polygon points="56.3,11.8 55.4,11.7 55.4,21.4 52.5,21.4 52.5,0.6 55.4,0.6 55.4,9.2 56.3,9.2 56.3,7 57.5,7 
            61.3,12.8 61.3,7 62.3,7 62.3,14.2 61.1,14.2 57.3,8.4 57.3,14.2 56.3,14.2 56.3,11.8  "/>
        </g>
      </svg>
    </a>
  </div>
</nav>
