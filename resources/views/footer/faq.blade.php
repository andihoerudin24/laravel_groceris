@extends('front.app')
@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    FAQ
                </h1>
                <p class="lead">
                    Frequently Asked Questions.
                </p>
            </div>
        </div>
    </div>

    <section id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><strong>1. What is Freshchery?</strong></p>
                    <p>Freshchery delivers groceries from the stores you love to your doorstep in as little as one hour! We empower you to shop at your trusted stores using our own trained and experienced Personal Shoppers, and then ensure a safe delivery to you.</p>
                    <p><strong>2. What stores are supported?</strong></p>
                    <p>We support a selected number of stores in your area including Ranch Market, Farmers Market, Lotte Mart, Transmart Carrefour, Super Indo, Grand Lucky, Red&amp;White and LOKA Lifestyle Supermarket. We are constantly adding new stores from your area, empowering you to shop from those stores. The stores that serve you are based on your location, and the availability of stores in your proximity.</p>
                    <p><strong>3. Do you serve my area?</strong></p>
                    <p>Currently we serve the Greater Jakarta area, including Tangeran, BSD, Bekasi and Depok as well as Surabaya and Bandung central areas. Check if we deliver to your area by downloading the App or using our Website. You can type your address and see the list of stores available. We keep adding stores on a regular basis! If your favorite store is not listed you can suggest it to us via the &nbsp;“Request New Stores” button at the bottom of the&nbsp; supermarkets list.</p>
                    <p><strong>4. How fast do you deliver?</strong></p>
                    <p>We deliver to you in the next hour, or at any other one-hour time-slot today and in the next 6 days.</p>
                    <p><strong>5. How much does delivery cost?</strong></p>
                    <p>It costs IDR20,000 for the&nbsp;delivery on all delivery slots. And FREE DELIVERY for order placed above IDR500,000 in May 2017 only</p>
                    <p><strong>6. What are the delivery hours?</strong></p>
                    <p>Our delivery hours are based on the opening hours of the stores we work with. Usually between 10am and 10pm. You can place your orders at any time of the day.</p>
                    <p><strong>7. Can I collect any kinds of club points from the supermarkets?</strong></p>
                    <p>Currently we do not support the collection of membership points or other savings from stores. Be sure to keep an eye on email and social media updates for updates on how we’re expanding to improve this functionality.</p>
                    <p><strong>8. What happens if any of my items are out of stock?</strong></p>
                    <p>We receive price and stock updates on a daily base from our retail partners. After placing your order, you will be asked what our Personal Shopper should do in case one of more of your items are out of stock. You can select for the whole order or for each unique product the following actions: choose “let shopper pick” if you want our shoppers to pick the most suitable replacement for you or “call me” if you prefer to receive a phone call. Alternatively, you can also select “do not replace”.</p>
                    <p><strong>9. Are there price differences from the store?</strong><br>
                    For some stores, we may add a small service charge on top of the store price. If you notice an item that you think is priced incorrectly, please reach out to us! We reserve the right to cancel items that are priced incorrectly due to error.</p>
                    <p><strong>10. How do you treat items that are non-Halal?</strong></p>
                    <p>We allow you to buy non-Halal items using Freshchery, and are very careful to ensure that at no point during checkout, delivery, or any other time, non-Halal and Halal items get in contact with each other. To ensure that, we use different bags and clearly separated parts of the box for the transport of non-Halal items.</p>
                    <p><strong>11. Would I get the Freshchery shopping bag for my order?</strong></p>
                    <p>As long as the stocks are available, our Driver will put your order on our very own reuseable shopping bag. If you don’t get the shopping bag, it could be happened because the stocks are empty. But we will restock our shopping bag in the stores maximum at 1 week, don’t worry.</p>
                    <p><strong>12.&nbsp;Can you assure the quality of the products that I bought?</strong></p>
                    <p>Of course! We can assure the quality of the items for you, our beloved customer. If you found any bad quality items, you can contact our Customer Service and we will replace it.</p>
                    <p><strong>13. How do I check the status of my order?</strong></p>
                    <p>You will get notified when your order is packed, order is on its way and has almost arrived. Remember to turn on your push notification in your phone settings. You can also go on “My Orders” section in the app to check live-time status.</p>
                    <p><strong>14. How do I edit or cancel my order?</strong></p>
                    <p>You can edit your order until the shopper starts picking your items. Go to “My Orders” section in the app and select the order you want to edit. Click on “Edit Order” to change one of the following:</p>
                    <ul>
                    <li>Add or remove items</li>
                    <li>Change delivery slot</li>
                    <li>Change payment method</li>
                    <li>Change address</li>
                    <li>Cancel order</li>
                    </ul>
                    <p><strong>15. How do I report a problem with my order?</strong></p>
                    <p>You can contact us following the “Help” button in the app and selecting “Contact Us”. We respond very quickly!</p>
                    <p><strong>16. When will I receive my refund?</strong></p>
                    <p>Payment will be made within 14 days by crediting your credit card.</p>
                    <p><strong>17. How do I review my receipt?</strong></p>
                    <p>You will receive an electronic receipt via e-mail after your order is delivered.</p>
                    <p><strong>18. How do I return my Freshchery bags?</strong></p>
                    <p>We encourage you to return your Freshchery bags that are still in good condition to your next Freshchery shopper for reuse. Feel free to use them for your own errands too.</p>
                    <p><strong>19. How do I return items?</strong></p>
                    <p>If something seems to be wrong with your order, such as a missing item or an incorrect item, you can reject the items when our rider arrives at your doorstep. We will charge you only for the delivered items. Once an item is accepted by you, it cannot be returned. We do not currently support a return process for any items you may have accidentally purchased via Freshchery. You are more than welcome to coordinate returns directly with your store. Keep in mind that we do keep the in-store receipts for accounting purposes.</p>
                    <p><strong>20. Why is my card authorized for more than my order total?</strong></p>
                    <p>Like a restaurant or a bar, Freshchery temporarily authorizes your card for slightly more than your order total. As soon as your order is complete, we charge your card for exactly what was delivered. Your bank will update the final charge on your statement in 3 – 7 business days after delivery. The temporary authorization can be for up to Rp 100,000 more than the order total. It helps account for charges like items sold by weight. If your final order total exceeds the authorization amount, there may be a second charge for the difference. You can see all charges reflected at the bottom of your receipt, which is available after delivery.</p>
                    <p><strong>21. Who will select my items?</strong></p>
                    <p>All our Personal Shoppers and Drivers are highly trained at selecting the best groceries for you. We employ Personal Shoppers that pick grocery and Drivers to deliver to your doorstep; in some stores, we may rely directly on Drivers to deliver your grocery.</p>
                    <p><strong>22. Who will deliver my order?</strong></p>
                    <p>Your orders will be delivered by specially trained and screened Drivers.</p>
                    <p><strong>23. What if all Personal Shoppers are busy?</strong></p>
                    <p>Occasionally our Personal Shoppers get overwhelmed with orders. During these times, the next available delivery slot may be later in the day. Use the delivery checker in the app to see the next available delivery for your order.</p>
                    <p><strong>24 I have many more questions for you!</strong></p>
                    <p>Contact us! We will be there at support.indonesia@Freshchery.com.</p>


                </div>
            </div>
        </div>
    </section>
</div>
@endsection