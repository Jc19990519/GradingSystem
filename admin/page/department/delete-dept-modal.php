<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="delete-dept-modal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-md px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex justify-end p-2">
        <button type="button" class="btn-close-modal" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="p-6 pt-0 text-center">
        <svg class="w-20 h-20 mx-auto text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <h3 class="mt-5 mb-6 text-xl font-normal text-gray-500">Are you sure you want to delete this department?</h3>
        <form id="delete-dept-form" action="../includes/department.inc.php" method="get">
          <div class="hidden">
            <label for="id">ID</label>
            <input id="id" type="hidden" name="id">
          </div>
          <button type="submit" name="delete" class="btn-red-modal">
            Yes, I'm sure
          </button>
          <button type="button" class="btn-white-modal" data-close-button>
            No, cancel
          </button>
          </div>
<script>
  const form = document.getElementById('delete-dept-form');
  form.addEventListener('submit', () => {
    location.reload();
  });
</script>
        </form>
      </div>
    </div>
  </div>
