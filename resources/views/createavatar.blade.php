<x-app-layout>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="ml-20 mt-20 bg-white p-6 sm:p-8 rounded-lg shadow-2xl w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl">
        <h2 class="text-xl sm:text-2xl font-bold text-pink-600 text-center mb-4 sm:mb-6">Enter your Measurements</h2>
        <form>
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" 
                              class="block mt-1 w-full placeholder-gray-600"
                              placeholder="Enter your name"
                              type="text"
                              name="name"
                              required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="sex" :value="__('Sex')" />
                <select id="sex" 
                        name="sex"
                        class="block mt-1 w-full p-2 border rounded-md shadow-inner placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-pink-300">
                    <option selected disabled>Please select your sex</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <x-input-error :messages="$errors->get('sex')" class="mt-2" />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="mt-4">
                    <x-input-label for="bust_size" :value="__('Bust Size')" />
                    <x-text-input id="bust_size"
                                  class="block mt-1 w-full placeholder-gray-600"
                                  placeholder="cm"
                                  type="text"
                                  name="bust_size"
                                  required />
                    <x-input-error :messages="$errors->get('bust_size')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="shoulder_width" :value="__('Shoulder Width')" />
                    <x-text-input id="shoulder_width"
                                  class="block mt-1 w-full placeholder-gray-600"
                                  placeholder="cm"
                                  type="text"
                                  name="shoulder_width"
                                  required />
                    <x-input-error :messages="$errors->get('shoulder_width')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="waist_size" :value="__('Waist Size')" />
                    <x-text-input id="waist_size"
                                  class="block mt-1 w-full placeholder-gray-600"
                                  placeholder="cm"
                                  type="text"
                                  name="waist_size"
                                  required />
                    <x-input-error :messages="$errors->get('waist_size')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="hip_size" :value="__('Hip Size')" />
                    <x-text-input id="hip_size"
                                  class="block mt-1 w-full placeholder-gray-600"
                                  placeholder="cm"
                                  type="text"
                                  name="hip_size"
                                  required />
                    <x-input-error :messages="$errors->get('hip_size')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="height" :value="__('Height')" />
                    <x-text-input id="height"
                                  class="block mt-1 w-full placeholder-gray-600"
                                  placeholder="cm"
                                  type="text"
                                  name="height"
                                  required />
                    <x-input-error :messages="$errors->get('height')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="weight" :value="__('Weight')" />
                    <x-text-input id="weight"
                                  class="block mt-1 w-full placeholder-gray-600"
                                  placeholder="kg"
                                  type="text"
                                  name="weight"
                                  required />
                    <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <x-primary-button type="submit">Create Avatar</x-primary-button>
            </div>
        </form>
    </div>
</body>
</x-app-layout>
