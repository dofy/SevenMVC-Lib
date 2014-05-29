/**
 * Ajax 表单提交
 */
var SevenForm = 
{
    request: function(url, type, form, callback, failed)
    {
        $.ajax({
            url: url,
            type: type,
            dataType: 'JSON',
            data: $(form).serializeArray(),
            success: function(data)
            {
                data.msg && alert(data.msg);
                if(data.rc == 0)
                {
                    callback && callback(data);
                }
                else
                {
                    failed && failed(data);
                }
            }
        });
    },
    get: function(url, form, callback, failed)
    {
        this.request(url, 'get', form, callback, failed);
    },
    post: function(url, form, callback, failed)
    {
        this.request(url, 'post', form, callback, failed);
    }
};

(function($)
{
    $('.del').click(function(evt)
    {
        evt.preventDefault();
        if(!confirm('确定要删除该信息吗?'))
        {
            return;
        }
        SevenForm.get(this.href, '#list', function(data)
        {
            $('.i_' + data.id).remove();
        });
    });

    $(':submit').click(function(evt)
    {
        var form = evt.target.form;
        evt.preventDefault();
        SevenForm.post(form.action, form, function(data)
        {
            data.backurl && (location.href = data.backurl);
        });
    });
})(jQuery);