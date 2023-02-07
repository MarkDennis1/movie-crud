@if (session()->has('message'))
<div class="fixed top-4 right-4 text-4xl z-10">
    <div class="relative">
        <div id="toast" class="px-4 py-2 w-full text-gray-700 bg-white border">
            {{session('message')}}
            <span id="loading" class="absolute bottom-0 left-0 bg-[#F33A2E] h-[2px] w-full"></span>
        </div>
    </div>
</div>
@endif

<script>
    const toast = document.getElementById("toast");
    const loading = document.getElementById("loading");
    if (toast.textContent) {
        setTimeout(() => {
            loading.classList.add('duration-[3s]');
            loading.classList.replace('w-full', 'w-0');
        }, 100);
        setTimeout(() => {
            loading.classList.remove('duration-[3s]');
            loading.classList.replace('w-0', 'w-full');
            toast.classList.add('invisible');
            loading.classList.add('invisible');
        }, 3000);
    }else{
        toast.classList.remove('invisible');
        loading.classList.remove('invisible');
    }
</script>
