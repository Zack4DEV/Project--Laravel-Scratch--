<article>
    <h1>Recipient</h1>
    <address>
        <p><{{ $Name }}<br></p>
    </address>
    <table class="meta">
        <tr>
            <th><span>Invoice #</span></th>
            <td><span>{{ $id }}</span></td>
        </tr>
        <tr>
            <th><span>Date</span></th>
            <td><span>{{ $cout }}</span></td>
        </tr>

    </table>
    <table class="inventory">
        <thead>
            <tr>
                <th><span>Item</span></th>
                <th><span>No of Days</span></th>
                <th><span>Rate</span></th>
                <th><span>Quantity</span></th>
                <th><span>Price</span></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><span>{{ $troom }}</span></td>
                <td><span>{{ $days }}</span></td>
                <td><span data-prefix>$</span><span>{{ $type_of_room }}</span></td>
                <td><span>{{ $nroom }}</span></td>
                <td><span data-prefix>$</span><span>{{ $ttot }}</span></td>
            </tr>
            <tr>
                <td><span>{{ $bed }}</span></td>
                <td><span>{{ $days }}</span></td>
                <td><span data-prefix>$</span><span>{{ $type_of_bed }}</span></td>
                <td><span>{{ $nroom }}</span></td>
                <td><span data-prefix>$</span><span>{{ $btot }}</span></td>
            </tr>
            <tr>
                <td><span>{{ $meal }}</span></td>
                <td><span>{{ $days }}</span></td>
                <td><span data-prefix>$</span><span>{{ $type_of_meal }}</span></td>
                <td><span>{{ $nroom }}</span></td>
                <td><span data-prefix>$</span><span>{{ $mepr }}</span></td>
            </tr>
        </tbody>
    </table>

    <table class="balance">
        <tr>
            <th><span>Total</span></th>
            <td><span data-prefix>$</span><span>{{ $fintot }}</span></td>
        </tr>
        <tr>
            <th><span>Amount Paid</span></th>
            <td><span data-prefix>$</span><span>0.00</span></td>
        </tr>
        <tr>
            <th><span>Balance Due</span></th>
            <td><span data-prefix>$</span><span>{{ $fintot }}</span></td>
        </tr>
    </table>
</article>
