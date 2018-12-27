app.controller('update_order', function ($scope, $http, $location, $cookieStore, model, loading, $rootScope, $cordovaFileTransfer) {



    if (!$cookieStore.get('userinfo')) {
        $location.path('/login');
        return false;
    }
    $scope.home = function () {
        //$location.path('/home');
        window.history.back();
    }


    $scope.orderinfo = $cookieStore.get('orderinfo');
    /**
     * Created By Sajal Goyal
     * Dated on 17/10/2018
     * Start of Function
     * function name : orderAgain
     * work on clicking on Order Again and work using reorder API
     */
    $scope.check_conditions = function () {

        if ($("input[name='radio']:checked").val() == '8') {
            $scope.Reschedule = '1';
            $("#myModal").modal("show");
        } else {
            $scope.Reschedule = '';
        }

        if ($("input[name='radio']:checked").val() != '9') {

            $('#hno').removeAttr('required');
        } else if ($("input[name='radio']:checked").val() == '9') {
            $('#hno').attr('required', true);
        }

    }

    $scope.form={};
    $scope.schedule = function(form){
        console.log(form)
        console.log($scope.date)

    }

    $scope.form = {};
    $scope.update_status = function (form) {

        var error_str = '';
        console.log($scope.form.radio)
        if ($scope.form.radio == undefined || $scope.form.radio == '')
        {
            error_str == "Order Status";
        }else{
            error_str == "";
        }
        if ($("input[name='radio']:checked").val() == '9') {
          
            if ($scope.comment == undefined || $scope.comment == '') {
            
                error_str += "Comment";
               
            }
           
        }
        if (error_str !== '')
        {
            
            error_str = " <span style='font-weight:700;'>Following fields must have valid information:</span> <br/> " + error_str;
            // model.show('Alert', error_str);
            alert(error_str);
            return;
        }
     
        console.log(error_str);
        loading.active();

        var args = $.param({
            'user_id': $cookieStore.get('userinfo').uid,
            'order_id': $rootScope.detail.order_id,
            'm_order_id': $rootScope.detail.id,
            'order_status': $scope.form.radio,
            'language_code': sessionStorage.lang_code
        });

        $http({
            headers: {
                //'token': '40d3dfd36e217abcade403b73789d732',
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            method: 'POST',
            url: app_url + '/delivery_boy/update_order_status',
            data: args

        }).then(function (response) {
            res = response;

            if (res.data.responseStatus == 'success') {
                console.log(res); return;
                //put cookie and redirect it    
                //model.show('Alert', res.data.responseMessage);
                $location.path('/cart');

            } else {
                //Throw error if not logged in
                //model.show('Alert', res.data.responseMessage);
              alert('ppppppppppppp');
            }

        }).finally(function () {
            loading.deactive();
        });
    }

    //End of Function


});