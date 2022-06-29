<x-layout>

    <div class="card mb-4 rounded-3 shadow-sm mt-3 mx-auto" style="width: 900px;">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Добави Контрагенти</h4>
        </div>
        <div class="card-body">
            <div>
                <form action="/addcontragent" method="Post" class="row g-3">
                    @csrf
                    <div class="col-10">
                       <input type="text" class="form-control" id="contr_name" name="contr_name" placeholder="Контрагент" aria-label="Контрагент" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="contr_bulstat" name="contr_bulstat" placeholder="Булстат" aria-label="Булстат" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="contr_iban" name="contr_iban" placeholder="IBAN" aria-label="IBAN" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="contr_bic" name="contr_bic" placeholder="BIC" aria-label="BIC" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="contr_bank" name="contr_bank" placeholder="Банка на Контрагента" aria-label="Банка на Контрагента">
                    </div>
                    <div class="col-md-6">
                        <select id="banks_id" name="banks_id" class="form-select">
                            @foreach($banks as $bank)
                                <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
                            @endforeach
                        </select>
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
            <h4 class="my-0 fw-normal">Списък Контрагенти</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col" style="width: 50px">#</th>
                        <th scope="col">Булстат</th>
                        <th scope="col">Име</th>
                        <th scope="col">IBAN</th>
                        <th scope="col">Банка</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contragents as $contragent)
                        <tr>
                            <td scope="row">{{$contragent->id}}</td>
                            <td>{{$contragent->contr_bulstat}}</td>
                            <td><a href="/changepass/{{$contragent->id}}"> {{$contragent->contr_name}}</a></td>
                            <td>{{$contragent->contr_iban}}</td>
                            <td>{{$contragent->banks->bank_name}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>

    </div>
</x-layout>
