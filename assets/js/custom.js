function SendMsg()
{
    let name = $('#name').val();
    let email = $('#email').val();
    let mobile = $('#mobile').val();
    let subject = $('#subject').val();
    let massege = $('#massege').val();
    // if($('#name1').val()!='' && $('#email1').val()!='' && $('#mobile1').val()!='' && $('#subject1').val()!='' && $('#massege1').val()!='' )
    // {
    //     let name = $('#name1').val();
    //     let email = $('#email1').val();
    //     let mobile = $('#mobile1').val();
    //     let subject = $('#subject1').val();
    //     let massege = $('#massege1').val();                                                                  
    // }
    if(name!='' && email!='' && mobile!='' && subject!='' && massege!='')
    {
        $.ajax({
            url:'Mailer/contactmail.php',
            type:'post',
            data: {name:name,email:email,mobile:mobile,subject:subject,massege:massege},
            success:function(suc)
            {
                if(suc=='Mail Sent')
                {
                    let action = 'savedata';
                    $.ajax({
                        url:'assets/ajax.php',
                        type:'post',
                        data:{name:name,email:email,mobile:mobile,subject:subject,massege:massege,action:action},
                        success:function(data)
                        {
                            data = JSON.parse(data);
                            if(data['success']=='true')
                            {
                                alert('We have recieved your query, we will get back to you soon');
                                window.location.reload();
                            }
                            else
                            {
                                alert('Something went wrong');
                                window.location.reload();
                            }
                        }
                    })
                }
                else
                {
                    alert('Something Went Wrong');
                }
            }
        })
    }
    else
    {
        alert('All fields are mandatory');
    }
}