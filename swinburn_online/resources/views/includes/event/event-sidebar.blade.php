<div class="event-sidebar">
    <div class="event-calendar">
        @php
        $now = Carbon\Carbon::now();
        @endphp
        <div class="event-category-title">
            <div class="month-year">
                {{ $now->format('m/Y') }}
            </div>
            <div class="days-of-week">
                <ul>
                    <li>Su</li> 
                    <li>Mo</li>
                    <li>Tu</li>
                    <li>We</li>
                    <li>Th</li>
                    <li>Fr</li>
                    <li>Sa</li>
                </ul>
            </div>
            <div class="days-of-month">
                <ul>
                    @php
                        $today = $now->day;
                        $start_day_of_week = $now->startOfMonth()->dayOfWeek;
                        $days_in_month = $now->daysInMonth;

                        for($i=0; $i < $start_day_of_week; $i++) { echo '<li></li>' ; } 
                        for($i=1; $i < $today; $i++) {
                            echo '<li><a href="?date=' . $now->format("Y-m-") . $i . '">' . $i . '</a></li>';
                        }
                        echo '<li class="today"><a href="?date=' . $now->format(" Y-m-") . $today . '">'.$today.'</a></li>';
                        for($i=$today+1; $i <= $days_in_month; $i++) { 
                            echo '<li><a href="?date=' . $now->format("Y-m-") . $i . '">' . $i . '</a></li>';
                        }
                    @endphp
                </ul>
            </div>
            <div class="label">
                {{__('event.events-time')}}
            </div>
        </div>
    </div>
    <div class="event-category-list">
        <div class="event-category-title">
        {!! getOption('event-category-title') !!}
        </div>
        <ul>
            @if (isset($category))
                @foreach($event_category as $item)
                <li class="{{ ($item->slug == $category->slug && isset($category))  ? 'active' : ''}}"><a href="/categories/{{$item->slug}}">{{$item->name}}</a></li>
                @endforeach
            @else
                @foreach($event_category as $item)
                <li><a href="/categories/{{$item->slug}}">{{$item->name}}</a></li>
                @endforeach
            @endif
        </ul>
    </div>
</div>