@if (session()->has('message'))
    <div id="toast" class="z-10 px-4 py-2 text-gray-700 bg-white border rounded-lg fixed top-4 right-4 text-4xl">
        {{session('message')}}
    </div>
@endif

<script>
    const toast = document.getElementById("toast");
    if (toast.textContent) {
        setTimeout(() => {
            toast.classList.add('invisible');
        }, 3000);
    }else{
        toast.classList.remove('invisible');
    }
</script>
