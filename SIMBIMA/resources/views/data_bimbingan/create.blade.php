 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Dashboard</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
 </head>

 <body>
     <x-navbar></x-navbar>

     <main class="pt-20" style="background-color: #0e4166; position: relative text-align: white;">

         <section>
             <div>
                 <div class="flex flex-col items-center justify-center float">
                     <div
                         class="w-full bg-white rounded-lg shadow dark:border md:mt-4 sm:max-w-md xl:p-0 dark:border-gray-700">
                         <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                             <h1 class="font-bold text-center md:text-3xl text-dark">
                                 Input Data
                             </h1>

                             <form action="{{ url('data_bimbingan') }}" method="post" class="space-y-4 md:space-y-6">
                                 {!! csrf_field() !!}
                                 <div class="mb-4">
                                     <input type="text" list="nama" placeholder="Nama" name="nama"
                                         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-light dark:border-gray-600 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                         required />
                                     <datalist id="nama">
                                         @foreach ($nama as $value)
                                             <option value="{{ $value }}"></option>
                                         @endforeach
                                     </datalist>
                                 </div>
                                 <div class="mb-4">
                                     <input type="text" list="NIM" placeholder="NPM" name="NIM"
                                         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-light dark:border-gray-600 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                         required />
                                     <datalist id="NIM">
                                         @foreach ($NIM as $value)
                                             <option value="{{ $value }}"></option>
                                         @endforeach
                                     </datalist>
                                 </div>
                                 <div class="mb-4">
                                     <input type="text" list="dosen_pembimbing_1" placeholder=" Dosen Pembimbing 1"
                                         name="dosen_pembimbing_1"
                                         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-light dark:border-gray-600 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                         required>
                                     <datalist id="dosen_pembimbing_1">
                                         @foreach ($dosen_1 as $value)
                                             <option value="{{ $value }}"> </option>
                                         @endforeach
                                     </datalist>
                                 </div>
                                 <div class="mb-4">
                                     <input type="text" list="dosen_pembimbing_2" placeholder=" Dosen Pembimbing 2"
                                         name="dosen_pembimbing_2"
                                         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-light dark:border-gray-600 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                         required>
                                     <datalist id="dosen_pembimbing_2">
                                         @foreach ($dosen_2 as $value)
                                             <option value="{{ $value }}"> </option>
                                         @endforeach
                                     </datalist>
                                 </div>
                                 <div class="mb-4">
                                     <input type="text" list="dosen_penguji" placeholder=" Dosen Penguji"
                                         name="dosen_penguji"
                                         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-light dark:border-gray-600 text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                         required />
                                     <datalist id="dosen_penguji">
                                         @foreach ($dosen_penguji as $ID3 => $Nama)
                                             <option value="{{ $Nama }}"></option>
                                         @endforeach
                                     </datalist>
                                 </div>


                                 <div class="text-center">
                                     <button type="submit" value="Save"
                                         class="text-black text-white hover:bg-blue-200 bg-sky-800 border font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <script>
            // Get the input elements
            const dosen1Input = document.querySelector('input[name="dosen_pembimbing_1"]');
            const dosen2Input = document.querySelector('input[name="dosen_pembimbing_2"]');
            
            // Add event listener to the first input
            dosen1Input.addEventListener('input', function() {
              // Get the selected value
              const selectedValue = this.value.trim();
              
              // Get all the options in dosen_pembimbing_2
              const options = document.querySelectorAll('#dosen_pembimbing_2 option');
          
              // Disable the options that match the selected value
              options.forEach(function(option) {
                const optionValue = option.value.trim();
                if (optionValue.localeCompare(selectedValue, undefined, { sensitivity: 'base' }) === 0) {
                  option.disabled = true;
                } else {
                  option.disabled = false;
                }
              });
          
              // Clear the value of the second input if the selected value matches
              if (dosen2Input.value.trim() === selectedValue) {
                dosen2Input.value = '';
              }
            });
          </script>
          
          
          
          
        
        
         
        
        
        
        

        

         <x-background></x-background>
     </main>

     <footer class="py-5 text-center bg-white fixed-bottom">
         <p>&copy; 2023 NoobDev</p>
     </footer>

 </body>

 </html>
