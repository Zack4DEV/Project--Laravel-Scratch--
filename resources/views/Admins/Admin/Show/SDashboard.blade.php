<div class="databox">
    <div class="box roombookbox">
        <h2>Total Booked Room</h1>
            <h1>
                {{ '$roombookrow / $roomrow' }}
            </h1>
    </div>
    <div class="box guestbox">
        <h2>Total Staff</h1>
            <h1>
                {{ $staffrow }}
            </h1>
    </div>
    <div class="box profitbox">
        <h2>Profit</h1>
            <h2>
                {{ $tot }}
            <span>$</span></h2>
    </div>
</div>
<div class="chartbox">
    <div class="bookroomchart">
        <canvas id="bookroomchart"></canvas>
        <h3 style="text-align: center;margin:10px 0;">Booked Room</h3>
    </div>
    <div class="profitchart">
        <div id="profitchart"></div>
        <h3 style="text-align: center;margin:10px 0;">Profit</h3>
    </div>
</div>
