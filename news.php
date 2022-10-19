<div class="container">
    <script>
        let url = "https://powerbi.microsoft.com/en-us/blog/category/uncategorized/";
        fetch(url)
        .then((res) => {
            return res.text();
        }) 
        .then((data) => {
        console.log(data);
        });
       
    </script> 
</div>