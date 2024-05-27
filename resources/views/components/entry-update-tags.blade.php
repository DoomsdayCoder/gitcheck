@props(['library'])

<script>
    
</script>

@if (!empty($library))
    <script defer>
        var obj = {!! json_encode($library) !!};
        const rstat = {!! json_encode($library->reading_status) !!};
        const mstat = {!! json_encode($library->manga_status) !!};
        const tagsFetched = {!! json_encode($library->tags) !!};

        document.querySelector('option[value="' + rstat + '"]').setAttribute('selected', 'selected');
        document.querySelector('option[value="' + mstat + '"]').setAttribute('selected', 'selected');

        const tracker = "set";
    </script>
@else
    <script defer>
        const tracker = "unset";
    </script>
@endif
<script defer>
    const values = [];
    const selectedBtnContainer = document.querySelector('.SelectSelectedButtons');
    const tagInp = document.querySelector('#tagsInput');

    if(tracker === "set"){
        SetValues(tagsFetched).forEach(element => {
            values.push(element);
        });
        addValues(values);
        RespectiveSelection(values);
    }

    tagInp.readOnly = true;


    selectedBtnContainer.addEventListener('click', e => {
        if (e.target.nodeName !== 'INPUT') return;
        const selected = e.target.value.trim();
        if (e.target.checked === true && !values.includes(selected)) {
            values.push(selected)
        } else {
            const indexof = values.indexOf(selected);
            if (indexof === 0) values.shift();
            values.splice(indexof, indexof);
        }
        TagsControl(selected);

    })

    function TagsControl() {
        addValues(values);
    }

    function addValues(tags) {
        const value = values.toString();
        tagInp.innerText = value.trim();
        return;
    }

    function SetValues(tagsFetched) {
        const temp = [];
        if (!tagsFetched) return temp;

        const splitVal = tagsFetched.split(',');
        
        splitVal.forEach(e => {
            temp.push(e.trim());
        })
        return temp;
    }

    function RespectiveSelection(fetchedTags) {
        fetchedTags.forEach(e => {
            document.getElementById(e.trim()).checked = 'true';
        });
    }
</script>
