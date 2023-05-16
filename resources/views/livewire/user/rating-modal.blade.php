<div>
  <button data-modal-target="rating-modal" data-modal-toggle="rating-modal" type="button"
                class="text-blue-500 underline">Review</button>
  <div id="rating-modal" tabindex="-1" aria-hidden="true"
      class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button"
                  class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                  data-modal-hide="rating-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="px-6 py-6 lg:px-8">
                  <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Review Modal</h3>
                  <form class="space-y-6" wire:submit.prevent="reviewSubmit" method="POST">
                      @csrf
  
                      <div 
                        x-data="
                          {
                            rating: 0,
                            hoverRating: 0,
                            ratings: [{'amount': 1, 'label':'Terrible'}, {'amount': 2, 'label':'Bad'}, {'amount': 3, 'label':'Okay'}, {'amount': 4, 'label':'Good'}, {'amount': 5, 'label':'Great'}],
                            rate(amount) {
                              if (this.rating == amount) {
                                this.rating = 0;
                              }
                              else this.rating = amount;
                            },
                            currentLabel() {
                                let r = this.rating;
                              if (this.hoverRating != this.rating) r = this.hoverRating;
                              let i = this.ratings.findIndex(e => e.amount == r);
                              if (i >=0) {return this.ratings[i].label;} else {return ''};     
                            }
                          }
                        " class="flex flex-col items-center justify-center space-y-2 rounded m-2 w-72 h-56 p-3 mx-auto">
                          <div class="flex space-x-0 ">
                              <template x-for="(star, index) in ratings" :key="index">
                                  <button type="button" wire:model="rating" @click="rate(star.amount)" @mouseover="hoverRating = star.amount"
                                      @mouseleave="hoverRating = rating" aria-hidden="true" :title="star.label"
                                      class="rounded-sm text-gray-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"
                                      :class="{'text-gray-600': hoverRating >= star.amount, 'text-yellow-400': rating >= star.amount && hoverRating >= star.amount}">
                                      <svg class="w-15 transition duration-150" xmlns="http://www.w3.org/2000/svg"
                                          viewBox="0 0 20 20" fill="currentColor">
                                          <path
                                              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                      </svg>
                                  </button>
  
                              </template>
                          </div>
                          <div class="p-2">
                              <template x-if="rating || hoverRating">
                                  <p x-text="currentLabel()"></p>
                              </template>
                              <template x-if="!rating && !hoverRating">
                                  <p>Please Rate!</p>
                              </template>
                          </div>
  
                      </div>
                      <div>
                          <label for="message" wire:model="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                              Review</label>
                          <textarea id="message" rows="4" name="message"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Leave a comment..."></textarea>
                      </div>
                      <button type="submit"
                          class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  
      <div>
        {{ $rating }}
        <br/>
        {{ $message }}
      </div>
  </div>
</div>

