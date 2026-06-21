jQuery(document).ready(function ($) {
  var file_frame;

  // Initialize Drag & Drop Sortable Indexing
  makeGalleryGridSortable();

  $("#native-gallery-upload-btn").on("click", function (e) {
    e.preventDefault();

    // If the media frame already exists, reopen it.
    if (file_frame) {
      file_frame.open();
      return;
    }

    // Replicate the ACF Multi-Image selection structure
    file_frame = wp.media.frames.file_frame = wp.media({
      title: "Select Images for Custom Gallery Grid",
      button: { text: "Insert into Gallery Layout" },
      multiple: true, // CRITICAL: Enables selecting multiple items with shift/ctrl
    });

    file_frame.on("select", function () {
      var selection = file_frame.state().get("selection");

      selection.map(function (attachment) {
        attachment = attachment.toJSON();
        if (attachment.type === "image") {
          // Check if image card already exists in the grid preview
          if (
            $(
              '#native-gallery-sortable-preview li[data-id="' +
                attachment.id +
                '"]',
            ).length === 0
          ) {
            $("#native-gallery-sortable-preview").append(
              '<li class="gallery-item-card" data-id="' +
                attachment.id +
                '">' +
                '<img src="' +
                attachment.sizes.thumbnail.url +
                '" />' +
                '<a href="#" class="remove-gallery-image-btn">&times;</a>' +
                "</li>",
            );
          }
        }
      });

      updateImageIdStringIndex();
    });

    file_frame.open();
  });

  // Remove item trigger
  $("#native-gallery-sortable-preview").on(
    "click",
    ".remove-gallery-image-btn",
    function (e) {
      e.preventDefault();
      $(this).closest(".gallery-item-card").remove();
      updateImageIdStringIndex();
    },
  );

  function makeGalleryGridSortable() {
    $("#native-gallery-sortable-preview").sortable({
      items: "li.gallery-item-card",
      cursor: "move",
      opacity: 0.8,
      update: function (event, ui) {
        updateImageIdStringIndex(); // Re-calculates indexing order upon drag drop finish
      },
    });
  }

  // Loops through preview elements and serializes their IDs to the hidden input form field
  function updateImageIdStringIndex() {
    var ids = [];
    $("#native-gallery-sortable-preview li.gallery-item-card").each(
      function () {
        var cardId = $(this).data("id");
        if (cardId) {
          ids.push(cardId);
        }
      },
    );
    // CRITICAL FIX: Ensure selector matches the HTML ID 'native_gallery_image_ids' exactly (uses underscore)
    $("#native_gallery_image_ids").val(ids.join(","));
  }
});
