<x-mail::message>
# Thank you for your order

Your order has been received and is now being processed. Your order details are shown below for your reference:

## Order <b>#KSI-2334-4545</b> (August 10th, 2023) Summary
<x-mail::table>
|        |          |   |
| ------------- |:-------------:| --------:|
| Vanilla Cream Crispy (x4)    | <img src="{{ Vite::asset('resources/images/normal/cake.jpg') }}" alt="Cake">     | <b>$1300.00</b>      |
| Chill Lemon Juice (x4)     | <img src="{{ Vite::asset('resources/images/normal/cake.jpg') }}" alt="Cake" > | <b>$200.00<b>      |
</x-mail::table>

<x-mail::table>
|        |          |   |
| ------------- |:-------------:| --------:|
|       | Subtotal      | <b>$1500.00</b>      |
|       | Shipping Fee | <b>$500.00</b>      |
|       | Total | <b>$2000.00</b>      |
</x-mail::table>

## Customer's Details
<x-mail::table>
|        |          |
| ------------- |-------------:|
| <b>Name</b>      | Iheanacho Chukwuemeka      | 
| <b>Email</b>      | James John |
| <b>Phone</b>      | +234 8100 9943 43 |
| <b>Shipping Address</b>      | Sylgon Lodge, Umuchima | 
</x-mail::table>

<x-mail::panel>
If you didn't perform any action or you encountered some problems, kindly send us an email on <a href="mailto:codejutsu@protonmail.com">codejutsu@protonmail.com</a> or chat us up on <a href="https://wa.me/+2348083369493">Whatsapp at +234 8083 369 493.</a>
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
