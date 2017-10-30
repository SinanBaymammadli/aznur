const deleteForm = document.querySelector("#product-delete-form");
const deleteBtn = document.querySelector("#product-delete-btn");

if (deleteBtn) {
  deleteBtn.addEventListener("click", e => {
    e.preventDefault();

    if (confirm("Are you sure?")) {
      deleteForm.submit();
    }
  });
}
