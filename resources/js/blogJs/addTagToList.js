class AddTagToList {
    constructor(textId, listId, buttonId)
    {
        $(document).ready(function () {
            $(textId).on('keyup input', function () {
                let fio = $(textId).val();
                if (fio.replace(/^\s+|\s+$/g, '')) {
                    $(buttonId).removeAttr('disabled');
                } else {
                    $(buttonId).attr('disabled', 'disabled');
                }
            })
        });
        $(buttonId).click(function () {
            $(listId).append(new Option($(textId).val(), $(textId).val(), true, true));
            $(textId).val('')
            $(buttonId).attr('disabled', 'disabled');
        });
    }
}
export default AddTagToList;






