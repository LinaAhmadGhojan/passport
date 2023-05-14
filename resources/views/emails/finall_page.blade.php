<!DOCTYPE html>


<div class="container">
    <div class="row">

        <div class="col-md-6 mx-auto">

            <form action="{{ route('first.page')}}" method="POST">
                @csrf
            <div class="card">
                <div class="card-body">

                    <div class="mb-3">
                        <h2 style="text-align: center">web -finall page</h2>
                    </div>




                    <div class="mb-3">
               <p style="    text-align: center;
               padding: 22px;color: black">Your information has been submitted successfully
                You will receive in coming day invitation email with instructions from RS4IT to book your flight.
                See you soon
               </p>

               <h4 style="text-align: center">Email- complete information content </h4>
                    </div>

                    <p style="    text-align: center;
               padding: 22px;color: black">
                        Well Done
                        Your information has been submitted successfully
                        You will receive in coming day invitation email with instructions from RS4IT to book your flight.
                        See you soon
                    </p>


                </div>
            </div>
        </form>
        </div>
     </div>
</div>

</body>
</html>
