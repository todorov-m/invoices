<x-layout>
    <div class="card mb-4 rounded-3 shadow-sm mt-3 mx-auto" style="width: 900px;">
        <div class="card-header py-3">
            <h4 class="my-0 fw-normal">{{$contragent->contr_name}}</h4>
        </div>
        <div class="card-body">
            <div>
                <form action="/addcontragent" method="Post" class="row g-3" onkeydown="return event.key != 'Enter';">
                    @csrf
                    <input type="hidden" id="contragents_id" name="contragents_id" value="{{$contragent->contr_id}}">
                    <input type="hidden" id="invoice_iban" name="invoice_iban" value="{{$contragent->contr_iban}}">
                    <input type="hidden" id="invoice_bulstat" name="invoice_bulstat" value="{{$contragent->contr_bulstat}}">
                    <input type="hidden" id="banks_id" name="banks_id" value="{{$contragent->banks_id}}">
                    <input type="hidden" id="users_id" name="users_id" value="{{auth()->user()->id}}">
                    <div class="col-md-3">
                        <label for="invoice_type" class="form-label">Тип документ</label>
                        <select id="invoice_type" name="invoice_type" class="form-select">
                            <option value="1" selected>Фактура</option>
                            <option value="2">Кредитно</option>
                            <option value="3">Фактура за прихващане</option>

                        </select>
                    </div>
                    <div class="col-md-7">
                    </div>

                    <div class="col-md-3">
                        <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Номер Фактура" aria-label="Номер Фактура">
                    </div>
                    <div class="col-md-3">
                        <input type="date" class="form-control" id="invoice_date" name="invoice_date" placeholder="Дата на документа" aria-label="Дата на документа">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="invoice_amount" name="invoice_amount" placeholder="Сума" aria-label="Сума">
                    </div>
                    <div class="col-md-4">
                        <label for="invoice_maturity_date" class="form-label">Дата на плащане</label>
                        <input type="date" class="form-control" id="invoice_maturity_date" name="invoice_maturity_date" placeholder="Дата на плащане" aria-label="Дата на плащане">
                    </div>

                    <div class="col-10">
                        <button type="submit" class="btn btn-primary">Добави</button>
                    </div>
                </form>

            </div>

        </div>

    </div>
</x-layout>
