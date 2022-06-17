<x-layout>

    <div class="card mb-4 rounded-3 shadow-sm mt-3 mx-auto" style="width: 900px;">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Добави Банка</h4>
        </div>
        <div class="card-body">
            <div>
                <form action="/addbank" method="Post" class="row g-3">
                    @csrf
                    <div class="col-10">
                        <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Име на Банка" aria-label="Име на Банка">
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="bank_string" name="bank_string" placeholder="String за експорт" aria-label="String за експорт">
                    </div>
                    <div class="col-10">
                        <button type="submit" class="btn btn-primary">Добави</button>
                    </div>
                </form>

            </div>

        </div>

    </div>

    <div class="card mb-4 rounded-3 shadow-sm mt-3 mx-auto" style="width: 900px;">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Списък Банки</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col" style="width: 50px">#</th>
                        <th scope="col">Име</th>
                        <th scope="col">String за експорт</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($banks as $bank)
                        <tr>
                            <td scope="row">{{$bank->id}}</td>
                           <td><a href="/changepass/{{$bank->id}}"> {{$bank->bank_name}}</a></td>
                            <td>{{$bank->bank_string}}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>

    </div>
</x-layout>
