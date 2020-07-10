<style>
    .action-divs-container {
        /* border: 1px solid rgb(231, 130, 0); */
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 3em;
        padding: 5em;
        margin: 1em;
        background-image: url("/assets/wave.svg");
        background-repeat: no-repeat;
    }

    .action {
        /* border: 1px solid green; */
        text-align: center;
        padding: 20px;
        cursor: pointer;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .action:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .action>div {
        margin: 1em 0px;
    }

    .img>img {
        width: 300px;
        height: 200px;
    }

    @media only screen and (max-width: 635px) {

        .action-divs-container {
            /* border: 1px solid rgb(231, 130, 0); */
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 3em;
            padding: 3em 1em;
            margin: 1em;
            /* background-image: url("/assets/wave.svg");
      background-repeat: no-repeat; */
        }

    }

    .hire_action {
        display: flex;
        justify-content: space-between;
    }
</style>
@include('inc.navbar')

<div class="action-divs-container">
    <div class="action">
        <div class="img">
            <img src="/images/nissan2.jpg" alt="Image1" />
        </div>
        <div>
            <h3>Tour travel Nissan</h3>
        </div>

        <div class="hire_action">
            <p style="font-size: 24px; margin:8px">Price:<span>100</span></p>
            <button>Hire now</button>
        </div>
    </div>

    <div class="action">
        <div class="img">
            <img src="/images/8seater.jpg" alt="Image1" />
        </div>
        <div>
            <h3>Nissan travel 9 seater</h3>
        </div>

        <div class="hire_action">
            <p style="font-size: 24px; margin:8px">Price:<span>100</span></p>
            <button>Hire now</button>
        </div>
    </div>

    <div class="action">
        <div class="img">
            <img src="/images/bus.jpg" alt="Image1" />
        </div>
        <div>
            <h3>Travel Bus</h3>
        </div>

        <div class="hire_action">
            <p style="font-size: 24px; margin:8px">Price:<span>100</span></p>
            <button>Hire now</button>
        </div>
    </div>



</div>