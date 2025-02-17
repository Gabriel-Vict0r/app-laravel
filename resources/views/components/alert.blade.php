 @if (session()->has('success'))
     <div class="bg-green-600 border border-green-700 text-yellow-700">
         {{ session('success') }}
     </div>
 @endif

 @if (session()->has('message'))
     <div class="bg-yellow-600 border border-yellow-700 text-black">
         {{ session('message') }}
     </div>
 @endif

 @if (session()->has('error'))
     <div class="bg-red-600 border border-red-700 text-white">
         {{ session('error') }}
     </div>
 @endif

 @if ($errors->any())
     <ul>
         @foreach ($errors->all() as $error)
             <li class="text-red-500">{{ $error }}</li>
         @endforeach
     </ul>
 @endif
