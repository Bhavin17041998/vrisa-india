<style>
    body {
        margin: 0;
        overflow-x: hidden; /* Prevent horizontal scroll */
    }

    .myFooter {
        position: absolute !important;
        bottom: 0 !important;
        width: 100%;
        text-align: center;
        padding: 15px;
        box-sizing: border-box;
        /* background-color: white; */
        left: 0;
        /* border-top: 2px solid #e9e9e9; */
        display: content;
        /* overflow-y: auto; */
    }
    
    .dark .myFooter p {
        margin: 0; /* Remove default margin */
        color: #ffffff; /* Optional: adjust text color */
    }

    .myFooter p {
        margin: 0; /* Remove default margin */
        color: #4a4a4a; /* Optional: adjust text color */
    }

    .dark .myFooter a {
        margin: 0; /* Remove default margin */
        color: #ffffff; /* Optional: adjust text color */
        text-decoration: underline;
    }

    .myFooter a {
        color: #4a4a4a; /* Optional: adjust link color */
        text-decoration: none; /* Optional: remove underline */
        text-decoration: underline;
    }

    .dark .myFooter a:hover {
        margin: 0; /* Remove default margin */
        color: red; /* Optional: adjust text color */
    }
    
    .myFooter a:hover {
        color: #1a202c; /* Optional: hover color for the link */
    }
</style>
<div class="myFooter" @if(auth()->user())style="margin-left: 140px" @endif>
    <p>
        <a href="#" target="_blank" style="font-weight:700">AffinityCode System pvt.ltd</a> &copy; {{ date('Y') }}. Design and Developed by <a href="https://github.com/Bhavin17041998" target="_blank"><span style="text-decoration: underline;color:red; font-weight:600"> Bhavin Panchal</span></a>.
    </p>
</div>